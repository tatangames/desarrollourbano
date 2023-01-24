<?php

namespace Database\Seeders;

use App\Models\Estados;
use Illuminate\Database\Seeder;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estados::create([
            'nombre' => 'En Proceso'
        ]);

        Estados::create([
            'nombre' => 'Resolucion Generada'
        ]);

        Estados::create([
            'nombre' => 'Resolución Entregada'
        ]);
    }
}
