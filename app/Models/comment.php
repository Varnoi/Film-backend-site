<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $table = 'comments';

    public function film()
    {
        return $this->belongsTo(Film::class, 'film_id','id')
    }
    public function User()
    {
        return $this->belongsTo(User::class,'user_id','id')
    }
}
