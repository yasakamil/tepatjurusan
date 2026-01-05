<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\AccountRegistration;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    // REGISTER FORM
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // LOGIN FORM ✅ (INI YANG TADI HILANG)
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // PROSES REGISTER
    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:account_registrations,email',
            'no_telfon' => 'required|string|max:20',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = AccountRegistration::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telfon' => $request->no_telfon,
            'password' => Hash::make($request->password),
            'status' => 'pending',
        ]);

        Auth::guard('member')->login($user);

        // Kirim email verifikasi
        event(new Registered($user));

        return redirect()->route('verification.notice');
    }

    // PROSES LOGIN
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::guard('member')->attempt($credentials)) {

            $user = Auth::guard('member')->user();

            // Cegah login jika belum verifikasi
            if (!$user->hasVerifiedEmail()) {
                Auth::guard('member')->logout();

                return back()->withErrors([
                    'email' => 'Email belum diverifikasi. Silakan cek email.',
                ]);
            }

            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    // LOGOUT
    public function logout(Request $request)
    {
        Auth::guard('member')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
