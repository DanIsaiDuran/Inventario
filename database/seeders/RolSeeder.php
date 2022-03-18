<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'Admin']);
        $puntoVenta = Role::create(['name' => 'PuntoVenta']);
        $usuario = Role::create(['name' => 'Usuario']);

        Permission::create(['name' => 'admin.inventario.index'])->syncRoles([$admin, $puntoVenta]);
        Permission::create(['name' => 'admin.inventario.editar'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.inventario.crear'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.inventario.eliminar'])->syncRoles([$admin]);

        Permission::create(['name' => 'admin.usuarios'])->syncRoles([$admin]);

        
    }
}
