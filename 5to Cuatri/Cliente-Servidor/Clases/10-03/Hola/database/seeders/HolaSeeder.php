<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\postales;

class Hola extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $code = new postales();
        foreach($code->codigos as $v){
            DB::table('holas')->insert([
                'Codigo'=> $v['codigo'],
                'Asentamiento' => $v['asentamiento'],
                'Tipo' => $v['tipo_asenta'],
                'Municipio' => $v['municipio'],
                'Estado' => $v['estado'],
                'Ciudad' => $v['ciudad']
            ]);
        }
    }
}
