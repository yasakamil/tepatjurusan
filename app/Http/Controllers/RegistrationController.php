<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\University;
use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function create()
    {
        // Ambil akun yang sedang login (member)
        $account = Auth::guard('member')->user();

        // Safety check
        if (!$account) {
            return redirect()->route('login');
        }

        // OPTIONAL: kalau sudah pernah daftar, redirect
        if ($account->registration) {
            return redirect()
                ->route('home')
                ->with('info', 'Kamu sudah mengisi formulir pendaftaran.');
        }

        // --- TAMBAHAN BARU ---
        // Ambil data kampus dan jurusan buat dropdown
        $universities = University::all();
        $majors = Major::all();

        // Kirim ke view (jangan lupa masukin compact)
        return view('events.registration', compact('account', 'universities', 'majors'));
    }

    public function store(Request $request)
    {
        $account = Auth::guard('member')->user();

        if (!$account) {
            return redirect()->route('login');
        }

        // Validasi diupdate biar ngecek ID-nya valid ada di database apa nggak
        // Gue ganti 'string' jadi 'exists:table,id' atau 'numeric' biar aman
        $validated = $request->validate([
            'nama_lengkap'    => 'required|string|max:255',
            'tempat_lahir'    => 'required|string|max:255',
            'tanggal_lahir'   => 'required|date',
            'no_hp'           => 'required|string|max:20',
            'no_hp_orangtua'  => 'required|string|max:20',
            'email'           => 'required|email',
            'alamat_domisili' => 'required|string',
            'asal_sekolah'    => 'required|string',
            'kelas_jenjang'   => 'required|string',

            // Perubahan Validasi: Cek apakah ID kampus/jurusan ada di database
            'jurusan_1'       => 'required|exists:majors,id',
            'universitas_1'   => 'required|exists:universities,id',

            'jurusan_2'       => 'nullable|exists:majors,id',
            'universitas_2'   => 'nullable|exists:universities,id',
            'jurusan_3'       => 'nullable|exists:majors,id',
            'universitas_3'   => 'nullable|exists:universities,id',
            'jurusan_4'       => 'nullable|exists:majors,id',
            'universitas_4'   => 'nullable|exists:universities,id',
            'jurusan_5'       => 'nullable|exists:majors,id',
            'universitas_5'   => 'nullable|exists:universities,id',
        ]);

        $account->registration()->create([
            ...$validated,
            'account_registration_id' => $account->id,
        ]);

        return redirect()
            ->route('home')
            ->with('success', 'Pendaftaran berhasil! Tunggu info selanjutnya dari kami ya.');
    }
}