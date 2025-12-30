<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'settlement_time'  => 'datetime',
        'raw_response'     => 'array',
        'gross_amount'     => 'integer',
    ];

    /**
     * Relasi ke akun pendaftar (student)
     */
    public function accountRegistration(): BelongsTo
    {
        return $this->belongsTo(AccountRegistration::class);
    }

    /**
     * Relasi ke event
     */
    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    /**
     * Cek apakah payment sudah sukses
     */
    public function isPaid(): bool
    {
        return in_array($this->transaction_status, [
            'settlement',
            'capture',
        ], true);
    }
}
