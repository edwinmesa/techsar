<?php

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::connection()->disableQueryLog();

        $json = File::get("public/data/country.json");
        $data = json_decode($json, true);

        foreach ($data as $row) {
            Country::create($row);
        }
    }
}
