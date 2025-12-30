<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountRegistration extends Model
{
    protected $fillable = [
        'nama',
        'email',
        'no_telfon',
        'password',
        'status',
        'verified_at',
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
    
}
