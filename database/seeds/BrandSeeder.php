<?php

use App\Models\Brand;
use App\Models\Provider;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Brands Electronics and Informatics
         */

        $providerId = Provider::where('f112_mm_provider_cod', 001)
            ->value('f112_mm_id_providers');

        Brand::create([
            'f150_mc_id_company'        =>1,
            'f150_mc_brand_cod'         => 5001,
            'f150_mc_brand_des'         => 'Hewlett-Packard',
            'f150_mc_brand_abv'         => 'HP',
            'f150_mc_id_provider'       => $providerId,
        ]);

        Brand::create([
            'f150_mc_id_company'        =>1,
            'f150_mc_brand_cod'         => 5002,
            'f150_mc_brand_des'         => 'Acer',
            'f150_mc_brand_abv'         => 'AC',
            'f150_mc_id_provider'       => $providerId,
        ]);

        Brand::create([
            'f150_mc_id_company'        =>1,
            'f150_mc_brand_cod'         => 5003,
            'f150_mc_brand_des'         => 'Compaq',
            'f150_mc_brand_abv'         => 'CQ',
            'f150_mc_id_provider'       => $providerId,
        ]);

        Brand::create([
            'f150_mc_id_company'        =>1,
            'f150_mc_brand_cod'         => 5004,
            'f150_mc_brand_des'         => 'Dell',
            'f150_mc_brand_abv'         => 'DL',
            'f150_mc_id_provider'       => $providerId,
        ]);

        Brand::create([
            'f150_mc_id_company'        =>1,
            'f150_mc_brand_cod'         => 5005,
            'f150_mc_brand_des'         => 'Samsung',
            'f150_mc_brand_abv'         => 'SG',
            'f150_mc_id_provider'       => $providerId,
        ]);

        Brand::create([
            'f150_mc_id_company'        =>1,
            'f150_mc_brand_cod'         => 5006,
            'f150_mc_brand_des'         => 'Asus',
            'f150_mc_brand_abv'         => 'AS',
            'f150_mc_id_provider'       => $providerId,
        ]);

        Brand::create([
            'f150_mc_id_company'        =>1,
            'f150_mc_brand_cod'         => 5007,
            'f150_mc_brand_des'         => 'LG Corporation',
            'f150_mc_brand_abv'         => 'LG',
            'f150_mc_id_provider'       => $providerId,
        ]);


//        Brand::create([
//            'f150_mc_brand_cod'         => 5001,
//            'f150_mc_brand_des'         => 'Sar Associates Inc',
//            'f150_mm_id_provider'       => $providerId,
//        ]);
//
//        Brand::create([
//            'f150_mc_brand_cod' => 5002,
//            'f150_mc_brand_des' => 'Gtr LLs',
//        ]);
//
//        Brand::create([
//            'f150_mc_brand_cod' => 5003,
//            'f150_mc_brand_des' => 'Group World Mk',
//        ]);

//        Brand::create([
//            'f150_mc_brand_cod' => 5005,
//            'f150_mc_brand_des' => 'Alienware',
//        ]);
//
//        Brand::create([
//            'f150_mc_brand_cod' => 5006,
//            'f150_mc_brand_des' => 'Apple',
//        ]);

//        Brand::create([
//            'f150_mc_brand_cod' => 5010,
//            'f150_mc_brand_des' => 'Falcon Northwest',
//        ]);

//        Brand::create([
//            'f150_mc_brand_cod' => 5011,
//            'f150_mc_brand_des' => 'Group World Mk',
//        ]);
//
//        Brand::create([
//            'f150_mc_brand_cod' => 5012,
//            'f150_mc_brand_des' => 'Fujitsu',
//        ]);

//        Brand::create([
//            'f150_mc_brand_cod' => 5013,
//            'f150_mc_brand_des' => 'Gateway',
//        ]);
//
//        Brand::create([
//            'f150_mc_brand_cod' => 5014,
//            'f150_mc_brand_des' => 'Hasee',
//        ]);
//
//        Brand::create([
//            'f150_mc_brand_cod' => 5015,
//            'f150_mc_brand_des' => 'Hitachi',
//        ]);

//        Brand::create([
//            'f150_mc_brand_cod' => 5016,
//            'f150_mc_brand_des' => 'Lenovo',
//        ]);


//        Brand::create([
//            'f150_mc_brand_cod' => 5018,
//            'f150_mc_brand_des' => 'Sony',
//        ]);

//        Brand::create([
//            'f150_mc_brand_cod' => 5019,
//            'f150_mc_brand_des' => 'Toshiba',
//        ]);





    }
}
