<?php

namespace App\Http\Controllers;

use App\Models\AccountRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // 1. Validasi
        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:account_registrations',
            'no_telfon' => 'required|numeric',
            'password'  => 'required|string|min:8|confirmed',
        ]);

        try {
            // 2. Simpan ke Database
            $user = AccountRegistration::create([
                'nama'      => $request->name,
                'email'     => $request->email,
                'no_telfon' => $request->no_telfon,
                'password'  => Hash::make($request->password),
            ]);

            // 3. Auto Login
            Auth::guard('member')->login($user);

            // 4. Redirect dengan Pesan SUKSES (SweetAlert)
            return redirect('/')->with('success_register', 'Selamat! Akun kamu berhasil dibuat. Welcome to the club! 🚀');

        } catch (\Exception $e) {
            // Kalau error database, balikin ke form
            return back()->withInput()->withErrors(['email' => 'Gagal bikin akun: ' . $e->getMessage()]);
        }
    }

    // ==========================================
    // LOGIN (MASUK)
    // ==========================================
    public function showLogin()
    {
        return view('auth.login'); // Pastikan file view ini ada
    }

    public function login(Request $request)
    {
        // 1. Validasi Input
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 2. Coba Login pake Guard 'member'
        // (Ini bakal otomatis cek email & password di tabel account_registrations)
        if (Auth::guard('member')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/'); // Redirect ke halaman tujuan atau home
        }

        // 3. Kalau Gagal
        return back()->withErrors([
            'email' => 'Email atau password salah, coba lagi bro.',
        ])->onlyInput('email');
    }

    // ==========================================
    // LOGOUT (KELUAR)
    // ==========================================
    public function logout(Request $request)
    {
        Auth::guard('member')->logout(); // Logout spesifik member
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}