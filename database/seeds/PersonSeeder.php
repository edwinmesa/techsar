<?php

use Illuminate\Database\Seeder;
Use App\Models\Person;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::create([
            'f110_mm_person_des'                    => 'Sar Mall',
            'f110_mm_person_cod'                    => 262854411,
            'f110_mm_person_fullName'               => 'Edwin Mesa',
            'f110_mm_person_password'               => bcrypt('151848hag'),
            'f110_mm_person_email'                  => 'edwisar@shs.com',
            'f110_mm_person_phone'                  => 616849161,
            'f110_mm_id_person_active'              => 1,

        ]);

        Person::create([
            'f110_mm_person_des'                    => 'Juan Pablos',
            'f110_mm_person_cod'                    => 9532556,
            'f110_mm_person_fullName'               => 'Juan Pablo',
            'f110_mm_person_password'               => bcrypt('uabus55'),
            'f110_mm_person_email'                  => 'juan@shs.com',
            'f110_mm_person_phone'                  => 1518841,
            'f110_mm_id_person_active'              => 1,

        ]);


        Person::create([
            'f110_mm_person_des'                    => 'Claudia Marcela',
            'f110_mm_person_cod'                    => 88841615,
            'f110_mm_person_fullName'               => 'Claudia Marcela',
            'f110_mm_person_password'               => bcrypt('shsvys55'),
            'f110_mm_person_email'                  => 'claudia@shs.com',
            'f110_mm_person_phone'                  => 6848411,
            'f110_mm_id_person_active'              => 1,

        ]);

        Person::create([
            'f110_mm_person_des'                    => 'Amog',
            'f110_mm_person_cod'                    => 4881515,
            'f110_mm_person_fullName'               => 'Andrea Milena',
            'f110_mm_person_password'               => bcrypt('bhsh255'),
            'f110_mm_person_email'                  => 'andrea@shs.com',
            'f110_mm_person_phone'                  => 651881,
            'f110_mm_id_person_active'              => 1,

        ]);
    }
}
