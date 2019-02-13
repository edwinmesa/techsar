<?php

use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection()->disableQueryLog();

        $json = File::get("public/data/states.json");
        $data = json_decode($json, true);

        foreach ($data as $row) {
            State::create($row);
        }
    }
}
