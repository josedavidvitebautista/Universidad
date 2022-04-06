<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director_Peliculas extends Model
{
    use HasFactory;

    public function director(){
        return $this->belongsTo('App\Models\Director');
    }

    public function pelicula(){
        return $this->belongsTo('App\Models\Peliculas');
    }

}
