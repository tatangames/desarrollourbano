<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'nombre' => 'Jonathan',
            'usuario' => 'jonathan',
            'password' => bcrypt('1234'),
        ])->assignRole('admin');

        Usuario::create([
            'nombre' => 'Usuario',
            'usuario' => 'usuario',
            'password' => bcrypt('1234'),
        ])->assignRole('usuario');
    }
}
