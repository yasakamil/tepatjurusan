<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\AccountRegistration;

class AuthController extends Controller
{
    // REGISTER FORM
    public function showRegisterForm()
    {
        return view('auth.register');
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

        return redirect()->route('home')->with('success', 'Register berhasil!');
    }

    // LOGIN FORM
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // PROSES LOGIN
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);


        if (Auth::guard('member')->attempt($credentials)) {
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
        // Logout spesifik member
        Auth::guard('member')->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}