<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'account_registration_id',
        'event_id',
        'midtrans_order_id',
        'payment_type',
        'gross_amount',
        'transaction_status',
        'snap_token',
        'pdf_url',
        'transaction_time',
        'settlement_time',
        'raw_response',
    ];

    protected $casts = [
        'transaction_time' => 'datetime',
        'settlement_time' => 'datetime',
        'raw_response' => 'array',
    ];

    public function accountRegistration()
    {
        return $this->belongsTo(AccountRegistration::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function isPaid(): bool
    {
        return in_array($this->transaction_status, [
            'settlement',
            'capture',
        ]);
    }
}
