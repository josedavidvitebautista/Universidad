<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\postales;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
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
