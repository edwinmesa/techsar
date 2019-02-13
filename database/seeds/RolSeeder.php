<?php

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
        Rol::create([
            'f002_us_rol_cod' => '1101',
            'f002_us_rol_des' => 'Administrator'
        ]);

        Rol::create([
            'f002_us_rol_cod' => '1102',
            'f002_us_rol_des' => 'User'
        ]);

        Rol::create([
            'f002_us_rol_cod' => '1103',
            'f002_us_rol_des' => 'User View'
        ]);
    }
}
