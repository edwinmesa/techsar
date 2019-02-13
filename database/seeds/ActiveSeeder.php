<?php

use App\Models\Active;
use Illuminate\Database\Seeder;

class ActiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Active::create([
            'f004_us_active_cod' => 1301,
            'f004_us_active_des' => 'Active'
        ]);

        Active::create([
            'f004_us_active_cod' => 1302,
            'f004_us_active_des' => 'Inactive'
        ]);

        Active::create([
            'f004_us_active_cod' => 1303,
            'f004_us_active_des' => 'Suspend'
        ]);
    }
}
