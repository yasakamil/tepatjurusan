<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    protected $fillable = ['title', 'slug', 'thumbnail', 'content', 'published_at'];

    protected $casts = [
        'published_at' => 'date',
    ];

    // Otomatis bikin slug pas create
    protected static function booted()
    {
        static::creating(function ($article) {
            if (empty($article->slug)) {
                $article->slug = Str::slug($article->title);
            }
        });
    }

    // Fitur "10 Min Read"
    public function getReadTimeAttribute()
    {
        // Asumsi kecepatan baca manusia = 200 kata/menit
        $wordCount = str_word_count(strip_tags($this->content));
        $minutes = ceil($wordCount / 200);
        return $minutes . ' Min read';
    }
}