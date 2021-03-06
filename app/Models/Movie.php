<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table = 'movie';

    protected $fillable = [
        'title',
        'storyline',
    ];

    public function stars()
    {
        return $this->belongsToMany(Star::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function director()
    {
        return $this->belongsTo(Director::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
