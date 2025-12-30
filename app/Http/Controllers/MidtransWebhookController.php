<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MidtransWebhookController extends Controller
{
    public function handle(Request $request)
    {
        $payload = $request->all();

        $payment = Payment::where(
            'midtrans_order_id',
            $payload['order_id']
        )->first();

        if (! $payment) {
            return response()->json(['message' => 'Payment not found'], 404);
        }

        // UPDATE PAYMENT DATA
        $payment->update([
            'transaction_status' => $payload['transaction_status'],
            'payment_type' => $payload['payment_type'] ?? null,
            'fraud_status' => $payload['fraud_status'] ?? null,
            'transaction_time' => $payload['transaction_time'] ?? null,
            'settlement_time' => $payload['settlement_time'] ?? null,
            'raw_response' => $payload,
        ]);

        // INI TEMPATNYA
        if ($payment->isPaid()) {

            $registration = $payment->accountRegistration;

            // CREATE USER JIKA BELUM ADA
            $user = User::firstOrCreate(
                ['email' => $registration->email],
                [
                    'name' => $registration->name,
                    'password' => Hash::make('default-password'),
                ]
            );

            // ATTACH EVENT (misalnya via pivot)
            $user->events()->syncWithoutDetaching([
                $payment->event_id => [
                    'paid_at' => now(),
                ]
            ]);
        }

        return response()->json(['message' => 'OK']);
    }
}
