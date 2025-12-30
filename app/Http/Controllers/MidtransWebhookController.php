<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class MidtransWebhookController extends Controller
{
    public function handle(Request $request)
    {
        /**
         * 1. Ambil payload
         */
        $payload = $request->all();

        /**
         * 2. Validasi wajib ada order_id
         */
        $orderId = $request->input('order_id');

        if (! $orderId) {
            return response()->json([
                'message' => 'order_id missing',
            ], 422);
        }

        /**
         * 3. Cari payment berdasarkan order_id Midtrans
         */
        $payment = Payment::where('midtrans_order_id', $orderId)->first();

        if (! $payment) {
            return response()->json([
                'message' => 'Payment not found',
            ], 404);
        }

        /**
         * 4. Anti double webhook
         * Jika sudah settlement, jangan proses ulang
         */
        if ($payment->transaction_status === 'settlement') {
            return response()->json([
                'message' => 'Already processed',
            ]);
        }

        /**
         * 5. Update data payment dari Midtrans
         */
        $payment->update([
            'transaction_status' => $request->input('transaction_status'),
            'payment_type'       => $request->input('payment_type'),
            'fraud_status'       => $request->input('fraud_status'),
            'transaction_time'   => $request->input('transaction_time'),
            'settlement_time'    => $request->input('settlement_time'),
            'raw_response'       => $payload,
        ]);

        /**
         * 6. Jika pembayaran sukses
         */
        if ($payment->isPaid()) {

            $registration = $payment->accountRegistration;

            if (! $registration) {
                Log::error('Account registration not found', [
                    'payment_id' => $payment->id,
                ]);

                return response()->json([
                    'message' => 'Account registration missing',
                ], 500);
            }

            /**
             * 7. Create user jika belum ada
             */
            $user = User::firstOrCreate(
                ['email' => $registration->email],
                [
                    'name'     => $registration->name,
                    'password' => Hash::make(Str::random(10)),
                ]
            );

            /**
             * 8. Attach event ke user (pivot)
             */
            $user->events()->syncWithoutDetaching([
                $payment->event_id => [
                    'status'   => 'paid',
                    'paid_at'  => now(),
                ]
            ]);
        }

        /**
         * 9. Response ke Midtrans
         */
        return response()->json([
            'message' => 'OK',
        ]);
    }
}
