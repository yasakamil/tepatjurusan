<?php

namespace App\Http\Controllers;

use App\Models\Payment;
// use App\Models\User; // Tidak lagi dibutuhkan jika logic User dihapus
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
         * 6. Jika pembayaran sukses (Settlement / Capture)
         */
        if ($payment->isPaid()) {

            // Ambil data Member / Pendaftar
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
             * 7. UPDATE LOGIC: Attach Event ke AccountRegistration
             * Menghubungkan Member ke Event dengan status 'paid'
             */
            $registration->events()->syncWithoutDetaching([
                $payment->event_id => [
                    'payment_status' => 'paid', // Sesuai kolom database baru
                    'paid_at'        => now(),
                ]
            ]);

            // Opsional: Update status akun utama jadi approved (jika diperlukan)
            // $registration->update(['status' => 'approved']);
        }

        /**
         * 8. Response ke Midtrans
         */
        return response()->json([
            'message' => 'OK',
        ]);
    }
}