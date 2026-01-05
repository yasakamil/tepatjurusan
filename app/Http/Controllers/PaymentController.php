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
use Carbon\Carbon;

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
            $isAlreadyRegistered = $registration->events()
                ->where('event_id', $eventId)
                ->wherePivot('payment_status', 'paid')
                ->exists();

            if ($isAlreadyRegistered) {
                return response()->json([
                    'success' => false, 
                    'message' => 'Anda sudah terdaftar dan lunas untuk event ini.'
                ], 400);
            }
            // -------------------------------------------------------

            // 4. Hitung harga yang akan dibayar (dengan diskon jika ada)
            $priceToPay = $this->calculatePrice($event);
            
            if ($priceToPay <= 0) {
                return response()->json(['success' => false, 'message' => 'Harga tidak valid'], 400);
            }

            // 5. Buat Order ID Unik
            $orderId = 'EVT-' . time() . '-' . Str::random(5);

            // 6. Siapkan Parameter Midtrans
            $params = [
                'transaction_details' => [
                    'order_id'     => $orderId,
                    'gross_amount' => (int) $priceToPay,
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
                        'price'    => (int) $priceToPay,
                        'quantity' => 1,
                        'name'     => substr($event->nama_event ?? 'Tiket Event', 0, 50) . 
                                     ($this->isDiscountActive($event) ? ' (Diskon)' : ''), 
                    ]
                ]
            ];

            // 7. Request Snap Token
            $snapToken = Snap::getSnapToken($params);

            // 8. Simpan ke Database Payment
            $payment = Payment::create([
                'account_registration_id' => $registration->id,
                'event_id'           => $event->id,
                'midtrans_order_id'  => $orderId,
                'gross_amount'       => $priceToPay, // Simpan harga setelah diskon
                'original_price'     => $event->price, // Simpan harga asli
                'discount_applied'   => $this->isDiscountActive($event) ? $event->discount_price : null,
                'transaction_status' => 'pending',
                'snap_token'         => $snapToken,
            ]);

            return response()->json([
                'success'    => true,
                'snap_token' => $snapToken,
                'payment_id' => $payment->id,
                'order_id'   => $orderId,
                'price'      => $priceToPay,
                'original_price' => $event->price,
                'is_discount' => $this->isDiscountActive($event)
            ]);

        } catch (\Throwable $e) {
            return response()->json([
                'success' => false, 
                'message' => 'Gagal memulai pembayaran: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Fungsi untuk menghitung harga yang harus dibayar
     */
    private function calculatePrice(Event $event): float
    {
        // Cek apakah diskon aktif
        if ($this->isDiscountActive($event)) {
            // Gunakan harga diskon
            return (float) $event->discount_price;
        }
        
        // Gunakan harga normal
        return (float) $event->price;
    }

    /**
     * Fungsi untuk mengecek apakah diskon masih aktif
     */
    private function isDiscountActive(Event $event): bool
    {
        // Cek apakah ada harga diskon
        if (empty($event->discount_price) || $event->discount_price <= 0) {
            return false;
        }

        // Cek apakah ada tanggal akhir diskon
        if (empty($event->discount_end_time)) {
            return false;
        }

        // Cek apakah diskon masih berlaku (waktu sekarang sebelum discount_end_time)
        $now = Carbon::now();
        $discountEndTime = Carbon::parse($event->discount_end_time);

        return $now->lt($discountEndTime); // lt = less than (sebelum)
    }
}