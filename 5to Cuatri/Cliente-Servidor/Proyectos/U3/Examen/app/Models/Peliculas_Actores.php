<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peliculas_Actores extends Model
{
    use HasFactory;

    public function pelicula(){
        $this->belongsTo('App\Model\Peliculas');
    }

    public function Actores(){
        $this->belongsTo('App\Model\Actores');
    }

}
