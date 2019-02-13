<?php

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'f100_mm_company_cod' => '81685466',
            'f100_mm_company_des' => 'SarDistributions',
        ]);
    }
}
