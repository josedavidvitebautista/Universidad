<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actores extends Model
{
    use HasFactory;

    public function peliculas(){
        return $this->belongsTo('App\Model\Pelicula_Actores');
    }
}
