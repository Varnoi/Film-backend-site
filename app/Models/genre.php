<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    use HasFactory;
    protected $table - 'genres';
    public function films()
    {
        return $this->belongsToMany(Film::class,'film_genres','genre_id','film_id','id','id')
    }
}
