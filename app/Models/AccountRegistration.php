<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountRegistration extends Authenticatable
{
    use Notifiable;

    protected $table = 'account_registrations';
    
    protected $fillable = [
        'nama',
        'email',
        'no_telfon',
        'password',
        'status',      // Ini status akun (Active/Inactive/etc)
        'verified_at',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'verified_at' => 'datetime',
    ];

    /**
     * Relasi ke Payment
     */
    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    /**
     * Relasi ke Event (Many to Many via Pivot)
     * UPDATE: Menggunakan kolom 'payment_status'
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

    public function getRememberTokenName()
    {
        return null; 
    }
}