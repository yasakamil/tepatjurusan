<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'banner_media',
        'location_type',
        'location_detail',
        'start_datetime',
        'end_datetime',
        'price',
        'quota',
        'status',
    ];

    protected static function booted()
    {
        static::creating(function ($event) {
            if (empty($event->slug)) {
                $event->slug = Str::slug($event->title);
            }
        });
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

}
