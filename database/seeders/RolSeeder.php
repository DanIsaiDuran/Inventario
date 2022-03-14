<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = New Rol();  $rol->rol = "Admin"; $rol->save();
        $rol = New Rol();  $rol->rol = "Usuario"; $rol->save();
    }
}
