<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'no_hp',
        'no_hp_orangtua',
        'email',
        'alamat_domisili',
        'asal_sekolah',
        'kelas_jenjang',
        'jurusan_1',
        'jurusan_2',
        'jurusan_3',
        'jurusan_4',
        'jurusan_5',
        'universitas_1',
        'universitas_2',
        'universitas_3',
        'universitas_4',
        'universitas_5',
    ];
}
