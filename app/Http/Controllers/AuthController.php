<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\AccountRegistration;

class AuthController extends Controller
{
    // Tampilkan form register
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Proses register
    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:account_registrations,email',
            'no_telfon' => 'required|string|max:20',
            'password' => 'required|string|min:6|confirmed', // perlu field password_confirmation
        ]);

        // Buat user baru
        $user = AccountRegistration::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telfon' => $request->no_telfon,
            'password' => Hash::make($request->password),
            'status' => 'pending',
        ]);

        // Login otomatis setelah register
        Auth::login($user);

        return redirect()->route('/dashboard')->with('success', 'Register berhasil!');
    }

    // Tampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // keamanan session
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
