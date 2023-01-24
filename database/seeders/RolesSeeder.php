<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Administrador
        $roleAdmin = Role::create(['name' => 'admin']);

        // USUARIO
        $roleUsuario = Role::create(['name' => 'usuario']);

        // ROLES Y PERMISOS
        Permission::create(['name' => 'sidebar.roles.y.permisos', 'description' => 'sidebar seccion roles y permisos'])->syncRoles($roleAdmin);

        // 1 SOLO PERMISO PARA TODOS
        Permission::create(['name' => 'sidebar.global.usuario', 'description' => 'acceso a todos los modulos al usuario'])->syncRoles($roleUsuario);




    }
}
