<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $fillable = ['title', 'rating', 'awards', 'release_date', 'length', 'genre_id'];


    

}
