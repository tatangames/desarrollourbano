<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(ProcesosSeeder::class);
        $this->call(EstadosSeeder::class);
    }
}
