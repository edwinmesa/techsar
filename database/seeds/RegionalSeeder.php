<?php

use App\Models\Company;
use App\Models\Regional;
use Illuminate\Database\Seeder;

class RegionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run ()
    {

        $companyId = Company::where('f100_mm_company_cod', '81685466')
            ->value('f100_mm_id_company');

            Regional::create([
                'f101_mm_regional_cod' => '025',
                'f101_mm_regional_des' => 'Centro Desarrollo America del Sur',
                'f101_mm_id_company'   => $companyId

            ]);

            Regional::create([
                'f101_mm_regional_cod' => '026',
                'f101_mm_regional_des' => 'Centro Desarrollo China',
                'f101_mm_id_company'   => $companyId
            ]);

            Regional::create([
                'f101_mm_regional_cod' => '027',
                'f101_mm_regional_des' => 'Centro Desarrollo Estados Unidos',
                'f101_mm_id_company'   => $companyId
            ]);

            Regional::create([
                'f101_mm_regional_cod' => '028',
                'f101_mm_regional_des' => 'Centro Desarrollo Europa',
                'f101_mm_id_company'   => $companyId
            ]);

    }

}
