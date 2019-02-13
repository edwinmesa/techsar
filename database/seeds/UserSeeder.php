<?php

use App\Models\Active;
use App\Models\Area;
use App\Models\Profession;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run ()
    {
        DB::connection()->disableQueryLog();

        $professionId = Profession::where('f001_us_profession_des', 'Desarrollador PHP')
            ->value('f001_us_id_profession');

        $rolId = Rol::where('f002_us_rol_cod', '1101')
            ->value('f002_us_id_rol');

        $areaId = Area::where('f003_us_area_cod', '1201')
            ->value('f003_us_id_area');

        $activeId = Active::where('f004_us_active_cod', '1301')
            ->value('f004_us_active_id');

        User::create([
            'f005_us_nic'               => '111856422',
            'f005_us_fname'             => 'Edwin Sair',
            'f005_us_user'              => 'user.admin',
            'f005_us_password'          => bcrypt('158488'),
            'f005_us_email'             => 'user.admin@example.com',
            'f005_us_phone'             => '26191916',
            'f005_us_id_profession'     => $professionId,
            'f005_us_id_rol'            => $rolId,
            'f005_us_id_area'           => $areaId,
            'f005_us_id_active'         => $activeId,
        ]);

//        for ($i = 0; $i < 500; $i++) {
//        factory(User::class, 50)
//            ->create();
//    }

    }
}
