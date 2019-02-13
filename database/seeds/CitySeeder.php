<?php

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection()->disableQueryLog();

        $json = File::get("public/data/cities.json");
        $data = json_decode($json, true);

        foreach ($data as $row) {
            City::create($row);
        }
    }
}
