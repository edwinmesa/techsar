<?php
Use App\Models\Person;
use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personId = Person::where('f110_mm_id_person', 1)
            ->value('f110_mm_id_person');

        Customer::create([
            'f111_mm_id_company'            =>1,
            'f111_mm_customer_cod'          => '001',
            'f111_mm_customer_des'          => 'Sar Mall Medellin Centro',
            'f111_mm_customer_email'        =>'sarmallmedellin@shs.com',
            'f111_mm_customer_phone'        => '3051824',
            'f111_mm_id_customer_active'    => 1,
            'f111_mm_id_person'             =>$personId,
        ]);
    }
}
