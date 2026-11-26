<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    public const HIGH_ENERGY_GENRES = ['action', 'adventure', 'sports', 'supernatural', 'mecha', 'martial arts'];
    public const MELANCHOLY_GENRES  = ['drama', 'romance', 'slice of life', 'psychological', 'tragedy'];
    public const BINGE_MAX_UNITS    = 24;

    protected $fillable = ['title', 'category', 'genres', 'rating', 'synopsis', 'unit_count'];

    protected $casts = [
        'genres' => 'array',
        'rating' => 'float',
    ];

    protected function unitLabel(): Attribute
    {
        return Attribute::make(get: fn () => match ($this->category) {
            'Anime', 'Drama' => 'episodes',
            'Manga', 'Novel' => 'chapters',
            default          => 'units',
        });
    }

    protected function actionLabel(): Attribute
    {
        return Attribute::make(get: fn () => match ($this->category) {
            'Anime', 'Drama' => 'Watch',
            'Manga', 'Novel' => 'Read',
            default          => 'Consume',
        });
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
