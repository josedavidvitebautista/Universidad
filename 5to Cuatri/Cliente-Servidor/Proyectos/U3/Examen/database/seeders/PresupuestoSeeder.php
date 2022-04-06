<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PresupuestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pre = array(
            array('monto' => '65 000 000 USD'),
            array('monto' => '19.000.000 $'),
            array('monto' => 'US$10.5-12 millones'),
            array('monto' => '$2 200 000'),
            array('monto' => '30 millones USD'),
            array('monto' => '$75, 000'),
            array('monto' => '-----')
        );

        foreach ($pre as $value){
            DB::table('presupuestos')->insert([
                'Monto' => $value['monto']
            ]);
        }
    }
}
