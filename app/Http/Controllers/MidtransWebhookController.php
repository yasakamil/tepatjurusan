<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\AccountRegistration;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MidtransWebhookController extends Controller
{
    public function handle(Request $request)
    {
        /**
         * 1. Ambil payload dan log untuk debugging
         */
        $payload = $request->all();
        
        Log::info('Midtrans Webhook Received:', [
            'order_id' => $request->input('order_id'),
            'transaction_status' => $request->input('transaction_status'),
            'fraud_status' => $request->input('fraud_status'),
        ]);

        /**
         * 2. Validasi wajib ada order_id
         */
        $orderId = $request->input('order_id');

        if (!$orderId) {
            Log::error('Midtrans Webhook Error: Missing order_id', $payload);
            return response()->json([
                'message' => 'order_id missing',
            ], 422);
        }

        /**
         * 3. Cari payment berdasarkan order_id Midtrans
         */
        $payment = Payment::where('midtrans_order_id', $orderId)->first();

        if (!$payment) {
            Log::error('Midtrans Webhook Error: Payment not found', [
                'order_id' => $orderId
            ]);
            return response()->json([
                'message' => 'Payment not found',
            ], 404);
        }

        /**
         * 4. Anti double webhook - Cek status terakhir
         */
        $transactionStatus = $request->input('transaction_status');
        $fraudStatus = $request->input('fraud_status');
        
        // Jika sudah settlement/sukses, jangan proses ulang
        if (in_array($payment->transaction_status, ['settlement', 'capture']) && 
            in_array($transactionStatus, ['settlement', 'capture'])) {
            Log::info('Payment already processed as success', [
                'payment_id' => $payment->id,
                'current_status' => $payment->transaction_status,
                'new_status' => $transactionStatus
            ]);
            return response()->json([
                'message' => 'Already processed as success',
            ]);
        }

        /**
         * 5. Update data payment dari Midtrans
         */
        $payment->update([
            'transaction_status' => $transactionStatus,
            'payment_type'       => $request->input('payment_type'),
            'fraud_status'       => $fraudStatus,
            'transaction_time'   => $request->input('transaction_time'),
            'settlement_time'    => $request->input('settlement_time'),
            'raw_response'       => json_encode($payload),
        ]);

        /**
         * 6. Ambil data pendaftar dan event
         */
        $registration = $payment->accountRegistration;
        $event = $payment->event;

        if (!$registration) {
            Log::error('Account registration not found', [
                'payment_id' => $payment->id,
                'order_id' => $orderId
            ]);
            return response()->json([
                'message' => 'Account registration missing',
            ], 500);
        }

        if (!$event) {
            Log::error('Event not found', [
                'payment_id' => $payment->id,
                'event_id' => $payment->event_id
            ]);
            return response()->json([
                'message' => 'Event missing',
            ], 500);
        }

        /**
         * 7. Handle status pembayaran
         */
        switch ($transactionStatus) {
            case 'capture':
            case 'settlement':
                if ($fraudStatus == 'accept') {
                    $this->handleSuccessPayment($payment, $registration, $event);
                } else if ($fraudStatus == 'challenge') {
                    $this->handleChallengePayment($payment, $registration, $event);
                }
                break;
                
            case 'pending':
                $this->handlePendingPayment($payment, $registration, $event);
                break;
                
            case 'deny':
            case 'cancel':
            case 'expire':
                $this->handleFailedPayment($payment, $registration, $event);
                break;
        }

        /**
         * 8. Response ke Midtrans
         */
        return response()->json([
            'status_code' => 200,
            'message' => 'OK',
        ]);
    }

    /**
     * Handle pembayaran sukses
     */
    private function handleSuccessPayment(Payment $payment, AccountRegistration $registration, Event $event)
    {
        Log::info('Processing successful payment', [
            'payment_id' => $payment->id,
            'user_id' => $registration->id,
            'event_id' => $event->id
        ]);

        // Gunakan transaction untuk memastikan konsistensi data
        DB::transaction(function () use ($payment, $registration, $event) {
            // Cek apakah sudah ada di pivot dengan status paid
            $existingPaid = $registration->events()
                ->where('event_id', $event->id)
                ->wherePivot('payment_status', 'paid')
                ->first();

            if ($existingPaid) {
                // Jika sudah ada status paid, tidak perlu kurangi quota lagi
                Log::info('User already has paid status for this event', [
                    'payment_id' => $payment->id,
                    'user_id' => $registration->id,
                    'event_id' => $event->id
                ]);
                
                // Tapi tetap update pivot untuk memastikan data konsisten
                $registration->events()->updateExistingPivot($event->id, [
                    'payment_status' => 'paid',
                    'paid_at'        => Carbon::now(),
                    'updated_at'     => Carbon::now(),
                ]);
            } else {
                // Cek apakah ada di pivot dengan status lain (pending/failed)
                $existing = $registration->events()
                    ->where('event_id', $event->id)
                    ->first();

                if ($existing) {
                    // Update existing pivot dari pending/failed ke paid
                    $registration->events()->updateExistingPivot($event->id, [
                        'payment_status' => 'paid',
                        'paid_at'        => Carbon::now(),
                        'updated_at'     => Carbon::now(),
                    ]);
                    
                    Log::info('Updated pivot from pending/failed to paid', [
                        'payment_id' => $payment->id,
                        'previous_status' => $existing->pivot->payment_status
                    ]);
                    
                    // Hanya kurangi quota jika sebelumnya bukan paid
                    if ($existing->pivot->payment_status !== 'paid') {
                        $this->decrementEventQuota($event);
                    }
                } else {
                    // Attach new pivot
                    $registration->events()->attach($event->id, [
                        'payment_status' => 'paid',
                        'paid_at'        => Carbon::now(),
                        'created_at'     => Carbon::now(),
                        'updated_at'     => Carbon::now(),
                    ]);
                    
                    Log::info('Created new pivot record', [
                        'payment_id' => $payment->id,
                        'pivot_created' => true
                    ]);
                    
                    // Kurangi quota event
                    $this->decrementEventQuota($event);
                }
            }
        });
    }

    /**
     * Mengurangi quota event dengan pengecekan
     */
    private function decrementEventQuota(Event $event)
    {
        // Cek apakah event masih memiliki quota
        if ($event->quota <= 0) {
            Log::warning('Cannot decrement quota: Event quota is already 0 or less', [
                'event_id' => $event->id,
                'current_quota' => $event->quota,
                'event_title' => $event->title
            ]);
            return;
        }

        // Gunakan decrement untuk atomic operation
        $updated = DB::table('events')
            ->where('id', $event->id)
            ->where('quota', '>', 0)
            ->decrement('quota');

        if ($updated) {
            $newQuota = $event->quota - 1;
            Log::info('Event quota decremented successfully', [
                'event_id' => $event->id,
                'event_title' => $event->title,
                'old_quota' => $event->quota,
                'new_quota' => $newQuota
            ]);
            
            // Optional: Update status event ke 'closed' jika quota habis
            if ($newQuota <= 0) {
                DB::table('events')
                    ->where('id', $event->id)
                    ->update(['status' => 'closed']);
                    
                Log::info('Event status changed to closed due to quota exhaustion', [
                    'event_id' => $event->id,
                    'event_title' => $event->title
                ]);
            }
        } else {
            Log::error('Failed to decrement event quota', [
                'event_id' => $event->id,
                'event_title' => $event->title,
                'current_quota' => $event->quota
            ]);
        }
    }

    /**
     * Handle pembayaran pending (challenge)
     */
    private function handleChallengePayment(Payment $payment, AccountRegistration $registration, Event $event)
    {
        Log::info('Payment under challenge/fraud review', [
            'payment_id' => $payment->id,
            'fraud_status' => $payment->fraud_status
        ]);

        // Cek apakah sudah ada di pivot
        $existing = $registration->events()
            ->where('event_id', $event->id)
            ->first();

        if ($existing) {
            // Update existing pivot
            $registration->events()->updateExistingPivot($event->id, [
                'payment_status' => 'pending',
                'paid_at'        => null,
                'updated_at'     => Carbon::now(),
            ]);
        } else {
            // Attach new pivot
            $registration->events()->attach($event->id, [
                'payment_status' => 'pending',
                'paid_at'        => null,
                'created_at'     => Carbon::now(),
                'updated_at'     => Carbon::now(),
            ]);
        }
    }

    /**
     * Handle pembayaran pending biasa
     */
    private function handlePendingPayment(Payment $payment, AccountRegistration $registration, Event $event)
    {
        Log::info('Payment is pending', [
            'payment_id' => $payment->id,
            'payment_type' => $payment->payment_type
        ]);

        // Cek apakah sudah ada di pivot
        $existing = $registration->events()
            ->where('event_id', $event->id)
            ->first();

        if ($existing) {
            // Update existing pivot
            $registration->events()->updateExistingPivot($event->id, [
                'payment_status' => 'pending',
                'paid_at'        => null,
                'updated_at'     => Carbon::now(),
            ]);
        } else {
            // Attach new pivot
            $registration->events()->attach($event->id, [
                'payment_status' => 'pending',
                'paid_at'        => null,
                'created_at'     => Carbon::now(),
                'updated_at'     => Carbon::now(),
            ]);
        }
    }

    /**
     * Handle pembayaran gagal
     */
    private function handleFailedPayment(Payment $payment, AccountRegistration $registration, Event $event)
    {
        Log::info('Payment failed', [
            'payment_id' => $payment->id,
            'transaction_status' => $payment->transaction_status
        ]);

        // Cek apakah sudah ada di pivot
        $existing = $registration->events()
            ->where('event_id', $event->id)
            ->first();

        if ($existing) {
            // Update existing pivot
            $registration->events()->updateExistingPivot($event->id, [
                'payment_status' => 'failed',
                'paid_at'        => null,
                'updated_at'     => Carbon::now(),
            ]);
        } else {
            // Attach new pivot
            $registration->events()->attach($event->id, [
                'payment_status' => 'failed',
                'paid_at'        => null,
                'created_at'     => Carbon::now(),
                'updated_at'     => Carbon::now(),
            ]);
        }
    }
}