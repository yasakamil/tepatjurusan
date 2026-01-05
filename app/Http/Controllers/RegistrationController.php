<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('events.registration');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap'    => 'required|string|max:255',
            'tempat_lahir'    => 'required|string|max:255',
            'tanggal_lahir'   => 'required|date',
            'no_hp'           => 'required|numeric',
            'no_hp_orangtua'  => 'required|numeric',
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
        Registration::create($validated);
        return redirect()->route('home')->with('success', 'Pendaftaran berhasil! Tunggu info selanjutnya dari kami ya.');
    }
}