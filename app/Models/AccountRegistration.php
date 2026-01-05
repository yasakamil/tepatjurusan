<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AccountRegistration extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $table = 'account_registrations';

    protected $fillable = [
        'nama',
        'email',
        'no_telfon',
        'password',
        'status',
        'verified_at',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'verified_at' => 'datetime',
    ];

    /**
     * OVERRIDE: kolom verifikasi email
     */
    public function getEmailVerifiedAtColumn()
    {
        return 'verified_at';
    }

    /**
     * OVERRIDE: cek apakah sudah verifikasi
     */
    public function hasVerifiedEmail()
    {
        return ! is_null($this->verified_at);
    }

    /**
     * OVERRIDE: SIMPAN verifikasi ke verified_at
     */
    public function markEmailAsVerified()
    {
        return $this->forceFill([
            'verified_at' => now(),
            'status' => 'approved', // optional tapi REKOMENDED
        ])->save();
    }

    /**
     * Relasi ke Payment
     */
    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    /**
     * Relasi ke Event
     */
    public function events(): BelongsToMany
    {
        return $this->belongsToMany(
            Event::class,
            'account_registration_event',
            'account_registration_id',
            'event_id'
        )
        ->withPivot(['payment_status', 'paid_at'])
        ->withTimestamps();
    }

    /**
     * Relasi ke Registration
     */
    public function registration(): HasOne
    {
        return $this->hasOne(Registration::class);
    }

    /**
     * Disable remember token
     */
    public function getRememberTokenName()
    {
        return null;
    }
        /**
     * Accessor untuk mendapatkan nama_event dari relasi events
     */
    public function getNamaEventAttribute(): string
    {
        return $this->events->pluck('slug')->implode("\n");
    }
}
