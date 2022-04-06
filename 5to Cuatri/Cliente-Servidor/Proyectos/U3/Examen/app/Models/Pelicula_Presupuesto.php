<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula_Presupuesto extends Model
{
    use HasFactory;

    public function presupuesto(){
        return $this->belongsTo('App\Model\Presupuesto');
    }

    public function pelicula(){
        return $this->belongsTo('App\Model\Peliculas');
    }

}
