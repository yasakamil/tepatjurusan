<?php

namespace App\Http\Controllers;

use App\Models\Registration;
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

        // Kirim ke view
        return view('events.registration', compact('account'));
    }

    public function store(Request $request)
    {
        $account = Auth::guard('member')->user();

        if (!$account) {
            return redirect()->route('login');
        }

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

            'jurusan_1'       => 'required|string',
            'universitas_1'   => 'required|string',

            'jurusan_2'       => 'nullable|string',
            'universitas_2'   => 'nullable|string',
            'jurusan_3'       => 'nullable|string',
            'universitas_3'   => 'nullable|string',
            'jurusan_4'       => 'nullable|string',
            'universitas_4'   => 'nullable|string',
            'jurusan_5'       => 'nullable|string',
            'universitas_5'   => 'nullable|string',
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