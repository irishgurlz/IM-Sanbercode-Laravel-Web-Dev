<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class genre extends Model
{
    use HasFactory;
    protected $table = 'genre';
    protected $fillable = ['nama'];

    public function listFilms(): HasMany
    {
        return $this->hasMany(film::class, 'genre_id');
    }
}