<?php

namespace App\Http\Controllers;

use App\Models\University;
use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    // 1. Tampilkan Halaman Profile (General & Sign Out)
    public function index()
    {
        $account = Auth::guard('member')->user();
        
        // Ambil data pendaftaran user (jika ada)
        // Kita pake optional() atau cek null di view, tapi sebaiknya eager load kalau relasinya ada
        $registration = $account->registration; 

        // Ambil data dropdown buat form edit pendaftaran
        $universities = University::all();
        $majors = Major::all();

        return view('profile.index', compact('account', 'registration', 'universities', 'majors'));
    }

    // 2. Logic Update Data Pendaftaran (Dari Tab General)
    public function updateRegistration(Request $request)
    {
        $account = Auth::guard('member')->user();

        // Validasi sama persis kayak RegistrationController
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

        // Update data registration atau Create kalau belum ada (antisipasi error)
        $account->registration()->updateOrCreate(
            ['account_registration_id' => $account->id], // Kunci pencarian
            $validated // Data yang diupdate
        );

        // Update nama akun utama juga biar sinkron (opsional, kalau mau nama di header berubah juga)
        $account->update(['nama' => $validated['nama_lengkap']]);

        return back()->with('success', 'Data pendaftaran berhasil diperbarui!');
    }

    // 3. Logic Delete Account (Tab Sign Out)
    public function destroy(Request $request)
    {
        $account = Auth::guard('member')->user();
        
        // Hapus Registration dulu (opsional jika cascade delete belum di-set di DB)
        if($account->registration) {
            $account->registration->delete();
        }

        $account->delete();
        Auth::guard('member')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('info', 'Akun kamu berhasil dihapus.');
    }
}