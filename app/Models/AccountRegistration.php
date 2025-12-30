<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AccountRegistration extends Authenticatable
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

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function events()
    {
        return $this->belongsToMany(Event::class)
            ->withPivot(['status', 'paid_at'])
            ->withTimestamps();
    }

    public function getRememberTokenName()
    {
        return null; 
    }
    
}
