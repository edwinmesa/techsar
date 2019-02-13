<?php

use App\Models\Profession;
use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profession::create([
            'f001_us_profession_cod' => '1001',
            'f001_us_profession_des' => 'Desarrollador PHP'
        ]);

        Profession::create([
            'f001_us_profession_cod' => '1002',
            'f001_us_profession_des' => 'Desarrollador Java'
        ]);

        Profession::create([
            'f001_us_profession_cod' => '1003',
            'f001_us_profession_des' => 'Desarrollador Python'
        ]);

        Profession::create([
            'f001_us_profession_cod' => '1004',
            'f001_us_profession_des' => 'Desarrollador SQL'
        ]);
    }
}
