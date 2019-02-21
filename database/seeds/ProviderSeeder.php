<?php

Use App\Models\Person;
use App\Models\Provider;
use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personId = Person::where('f110_mm_id_person', 5)
            ->value('f110_mm_id_person');

        Provider::create([
            'f112_mm_provider_cod'          => 001,
            'f112_mm_provider_des'          => 'Sar Distributions World',
            'f112_mm_provider_taxes'        => 0.8,
            'f112_mm_provider_delivery'     => 0.4,
            'f112_mm_provider_email'        =>'sardist@shs.com',
            'f112_mm_provider_phone'        => 1161,
            'f112_mm_id_provider_active'    => 1,
            'f112_mm_id_person'             =>$personId,
            'f112_mm_id_company'            =>1

        ]);
    }
}
