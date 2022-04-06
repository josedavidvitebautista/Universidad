<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ActoresSeeder;
use Database\Seeders\DirectorSeeder;
use Database\Seeders\PeliculasSeeder;
use Database\Seeders\PresupuestoSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ActoresSeeder::class);
        $this->call(DirectorSeeder::class);
        $this->call(PeliculasSeeder::class);
        $this->call(PresupuestoSeeder::class);
    }
}
