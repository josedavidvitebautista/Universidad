<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeliculasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $peli = array(
            array('name'=> 'Ojos bien cerrados'),
            array('name'=> 'El resplandor'),
            array('name'=> '2001:odisea del espacio'),
            array('name'=> 'La naranja mecanica'),
            array('name'=> 'Cara de guerra'),
            array('name'=> 'El beso del asesino'),
            array('name'=> 'Habitacion 237')
        );

        foreach ($peli as $value){
            DB::table('peliculas')->insert([
                'Nombre' => $value['name']
            ]);
        }
    }
}
