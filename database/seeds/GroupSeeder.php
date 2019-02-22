<?php

use App\Models\Group;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create([
            'f151_mc_id_company'=>1,
            'f151_mc_group_cod' => '5101',
            'f151_mc_group_des' => 'Informatica'
        ]);

        Group::create([
            'f151_mc_id_company'=>1,
            'f151_mc_group_cod' => '5102',
            'f151_mc_group_des' => 'Eletronica'
        ]);

        Group::create([
            'f151_mc_id_company'=>1,
            'f151_mc_group_cod' => '5103',
            'f151_mc_group_des' => 'Hogar'
        ]);

        Group::create([
            'f151_mc_id_company'=>1,
            'f151_mc_group_cod' => '5104',
            'f151_mc_group_des' => 'Salud y Belleza'
        ]);

        Group::create([
            'f151_mc_id_company'=>1,
            'f151_mc_group_cod' => '5105',
            'f151_mc_group_des' => 'Moda'
        ]);
    }
}
