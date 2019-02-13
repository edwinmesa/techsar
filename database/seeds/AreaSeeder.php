<?php

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create([
            'f003_us_area_cod' => '1201',
            'f003_us_area_des' => 'Developer'
        ]);

        Area::create([
            'f003_us_area_cod' => '1202',
            'f003_us_area_des' => 'Logistic'
        ]);

        Area::create([
            'f003_us_area_cod' => '1203',
            'f003_us_area_des' => 'Administrative'
        ]);
    }
}
