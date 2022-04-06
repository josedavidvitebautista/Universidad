<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Director;
use Illuminate\Support\Facades\DB;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $var = new Director();
        DB::table('directors')->insert([
            'Nombre' => 'Stanley Kubrick',
            'Foto' => 'https://moreliafilmfest.com/sites/default/files/legacy/2013/07/Kubrick.jpg'
        ]);

    }
}
