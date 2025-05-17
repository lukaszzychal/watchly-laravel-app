<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Movie extends Model
{
    /** @use HasFactory<\Database\Factories\MovieFactory> */
    use HasFactory;

    // Automatyczne generowanie sluga przy tworzeniu/aktualizacji
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($movie) {
            $movie->slug = Str::slug($movie->title);
        });

        static::updating(function ($movie) {
            $movie->slug = Str::slug($movie->title);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug'; // Dzięki temu możesz używać sluga zamiast ID w URL
    }


}
