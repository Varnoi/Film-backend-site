<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    use HasFactory;
    protected $table - 'films'; 
    
    public function comments()
    {
        return $this->hasMany (Comment::class, 'film_id','id')
    }
    public function genres()
    {
        return $this->belongsToMany(genre::class,'film_genres','film_id','genre_id','id','id')
    }
}
