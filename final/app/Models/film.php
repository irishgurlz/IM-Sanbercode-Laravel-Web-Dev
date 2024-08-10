<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use App\models\genre;

class film extends Model
{
    use HasFactory;
    protected $table = 'film';
    protected $fillable = ['judul',  'ringkasan', 'tahun', 'poster', 'genre_id'];

    public function genre(): BelongsTo
    {
        return $this->belongsTo(genre::class, 'genre_id');
    }

    public function kritik(){
        return $this->hasMany(kritik::class,'film_id');
    }
}
