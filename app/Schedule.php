<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public function movie(){
        return $this->belongsTo(Movie::class, 'movie_id', 'id');
    }
    public function studio(){
        return $this->belongsTo(Studio::class, 'studio_id', 'id');
    }
}
