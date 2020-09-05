<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie_rental extends Model
{
    protected $table = 'movie_rental';
    protected $fillable = ['movie_id','rental_id','price','observations'];
    protected $guarded = ['id'];
}
