<?php

use App\Models\Active;
use App\Models\Area;
use App\Models\Profession;
use App\Models\Rol;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'f005_us_nic' => $faker->randomNumber(9),
        'f005_us_fname' => $faker->name,
        'f005_us_user' => $faker->word,
        'f005_us_password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'f005_us_email' => $faker->unique()->safeEmail,
        'f005_us_phone' => $faker->randomNumber(9),
        'f005_email_verified_at' => now(),
        'f005_us_id_profession' =>Profession::all()->random()->f001_us_id_profession,
        'f005_us_id_rol' =>Rol::all()->random()->f002_us_id_rol,
        'f005_us_id_area' =>Area::all()->random()->f003_us_id_area,
        'f005_us_id_active' =>Active::all()->random()->f004_us_active_id,
        'remember_token' => str_random(10),
    ];
});
