<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\AccountRegistration;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Midtrans\Snap;
use Midtrans\Config;

class PaymentController extends Controller
{
    public function create(Request $request, $eventId)
    {
        // ==============================
        // MIDTRANS CONFIG (WAJIB)
        // ==============================
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // ==============================
        // DATA REGISTRATION & EVENT
        // ==============================
        $registrationId = session('account_registration_id');

        if (! $registrationId) {
            return response()->json([
                'message' => 'Registration session not found'
            ], 400);
        }

        $registration = AccountRegistration::findOrFail($registrationId);
        $event = Event::findOrFail($eventId);

        // ==============================
        // ORDER ID
        // ==============================
        $orderId = 'EVT-' . strtoupper(Str::random(10));

        // ==============================
        // SNAP PARAMS
        // ==============================
        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => (int) $event->price,
            ],
            'customer_details' => [
                'first_name' => $registration->name,
                'email' => $registration->email,
                'phone' => $registration->phone ?? null,
            ],
        ];

        // ==============================
        // GET SNAP TOKEN
        // ==============================
        $snapToken = Snap::getSnapToken($params);

        // ==============================
        // SAVE PAYMENT
        // ==============================
        $payment = Payment::create([
            'account_registration_id' => $registration->id,
            'event_id' => $event->id,
            'midtrans_order_id' => $orderId,
            'gross_amount' => $event->price,
            'transaction_status' => 'pending',
            'snap_token' => $snapToken,
        ]);

        return response()->json([
            'snap_token' => $snapToken,
            'payment_id' => $payment->id,
        ]);
    }
}
