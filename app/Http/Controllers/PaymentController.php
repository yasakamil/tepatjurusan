<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\AccountRegistration;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Midtrans\Snap;
use Midtrans\Config;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function create(Request $request, $eventId)
    {
        try {
            // 1. Setup Midtrans
            Config::$serverKey    = config('midtrans.server_key');
            Config::$isProduction = config('midtrans.is_production');
            Config::$isSanitized  = true;
            Config::$is3ds        = true;

            // 2. Identifikasi User (Member)
            $user = Auth::guard('member')->user();
            $registrationId = $user ? $user->id : $request->input('registration_id');

            if (! $registrationId) {
                return response()->json(['success' => false, 'message' => 'User belum login'], 401);
            }

            $registration = AccountRegistration::find($registrationId);
            if (! $registration) {
                return response()->json(['success' => false, 'message' => 'Data registrasi tidak ditemukan'], 404);
            }

            // 3. Cek Event
            $event = Event::find($eventId);
            if (! $event) {
                return response()->json(['success' => false, 'message' => 'Event tidak ditemukan'], 404);
            }

            if ((int) $event->price <= 0) {
                return response()->json(['success' => false, 'message' => 'Event gratis'], 400);
            }

            // --- TAMBAHAN PENTING: CEK APAKAH SUDAH PERNAH BAYAR ---
            // Kita cek di tabel pivot (account_registration_event)
            // Apakah user ini sudah terdaftar di event ini dengan status 'paid'?
            $isAlreadyRegistered = $registration->events()
                ->where('event_id', $eventId)
                ->wherePivot('payment_status', 'paid') // Sesuai kolom pivot kita tadi
                ->exists();

            if ($isAlreadyRegistered) {
                return response()->json([
                    'success' => false, 
                    'message' => 'Anda sudah terdaftar dan lunas untuk event ini.'
                ], 400);
            }
            // -------------------------------------------------------

            // 4. Buat Order ID Unik
            // Tips: Tambahkan ID user/time agar benar-benar unik dan mudah ditracking
            $orderId = 'EVT-' . time() . '-' . Str::random(5);

            // 5. Siapkan Parameter Midtrans
            $params = [
                'transaction_details' => [
                    'order_id'     => $orderId,
                    'gross_amount' => (int) $event->price,
                ],
                'customer_details' => [
                    'first_name' => $registration->nama,
                    'email'      => $registration->email,
                    'phone'      => $registration->no_telfon,
                ],
                // Optional: Tambahkan item_details agar di email Midtrans jelas beli apa
                'item_details' => [
                    [
                        'id'       => $event->id,
                        'price'    => (int) $event->price,
                        'quantity' => 1,
                        'name'     => substr($event->nama_event ?? 'Tiket Event', 0, 50), 
                    ]
                ]
            ];

            // 6. Request Snap Token
            $snapToken = Snap::getSnapToken($params);

            // 7. Simpan ke Database Payment
            $payment = Payment::create([
                'account_registration_id' => $registration->id,
                'event_id'           => $event->id,
                'midtrans_order_id'  => $orderId,
                'gross_amount'       => $event->price,
                'transaction_status' => 'pending',
                'snap_token'         => $snapToken,
            ]);

            return response()->json([
                'success'    => true,
                'snap_token' => $snapToken,
                'payment_id' => $payment->id,
                'order_id'   => $orderId 
            ]);

        } catch (\Throwable $e) {
            return response()->json([
                'success' => false, 
                'message' => 'Gagal memulai pembayaran: ' . $e->getMessage()
            ], 500);
        }
    }
}