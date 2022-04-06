<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{
    use HasFactory;

    public function director(){
        return $this->belongsTo('App\Model\Director_Pelicula');
    }

    public function actores(){
        return $this->hasMany('App\Model\Peliculas_Actores');
    }

    public function presupuesto(){
        return $this->belongsTo('App\Model\Pelicula_Presupuesto');
    }
}
