<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Registration extends Model
{
    protected $fillable = [
        'account_registration_id',
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

    protected $casts = [
        'tanggal_lahir' => 'date',
    ];

    /**
     * Relasi ke AccountRegistration
     */
    public function accountRegistration(): BelongsTo
    {
        return $this->belongsTo(AccountRegistration::class);
    }
}