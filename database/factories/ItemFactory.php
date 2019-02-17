<?php

use App\Models\Brand;
use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

/**
 * Faker de Marca Sar Associates Inc. Esta Marca distribuye
 * Todos los servicios a nivel colombia la categoria en este
 * caso es Informatica.
 */

$factory->define(App\Models\Item::class, function (Faker $faker) {

    $faker->addProvider( new \App\Providers\FakerDataInformaticsServiceProvider($faker));

    /**
     * Query para Marcas de los id de 1 a 20
     * para los grupos informatica y electronica.
     */
    $brandId = DB::table('t150_mc_brands')
        ->whereBetween('f150_mc_id_brand', array(1,7))->get();

    /* Obtain values array brands and random*/
    $valueBrandId = $brandId->random()->f150_mc_id_brand;
    /* Obtain id brand and query description */
    $valueBrandDes = DB::table('t150_mc_brands')
        ->where('f150_mc_id_brand', $valueBrandId)
        ->value('f150_mc_brand_des');
    /* Obtain id brand and query abv */
    $valueBrandAbv = DB::table('t150_mc_brands')
        ->where('f150_mc_id_brand', $valueBrandId)
        ->value('f150_mc_brand_abv');
    /* Obtain id provider foreign key to brands*/
    $valueProviderId = DB::table('t150_mc_brands')
        ->where('f150_mc_id_brand', $valueBrandId)
        ->value('f150_mm_id_provider');
    /* Obtain des provider where value is var $valueProviderId*/
    $valueProviderDes = DB::table('t112_mm_providers')
        ->where('f112_mm_id_providers', $valueProviderId)
        ->value('f112_mm_provider_des');
    /* Obtain id category where f152_mc_category_cod = monitor */
    $valueCategoryId = DB::table('t152_mc_categories')
        ->where('f152_mc_category_cod', 10002)
        ->value('f152_mc_id_category');
    /* Obtain des category*/
    $valueCategoryDes = DB::table('t152_mc_categories')
        ->where('f152_mc_id_category', $valueCategoryId)
        ->value('f152_mc_category_des');

    static $itemCod = 100;
    return [
        'f153_mc_item_cod'          => $itemCod++,
        'f153_mc_item_des'          => $faker->monitor.' '.$valueBrandDes,
        'f153_mc_item_active'       => 1,
        'f153_mc_item_model'        => $valueBrandAbv.' '.$faker->models.$faker->numberBetween(14,21),
        'f153_mc_item_ean'          => '00'.$faker->ean8,
        'f153_mc_item_date_fab'     => $faker->dateTimeBetween('-16 years', $endDate = '-12 years', $timezone = null),
        'f153_mc_item_date_ven'     => $faker->dateTimeBetween('-7 years', $endDate = '-2 years', $timezone = null),
        'f153_mc_brand'             => $valueBrandDes,
        'f153_mc_provider'          => $valueProviderDes,
        'f153_mc_category'          => $valueCategoryDes,
        'f153_mc_id_category'       => $valueCategoryId,
        'f153_mc_id_brand'          =>$valueBrandId,
        'f153_mc_id_provider'       =>$valueProviderId,
//        'f153_mc_item_des'          => function (array $post) {
//                                        return App\Models\Brand::find($post['f153_mc_id_brand'])->f150_mc_brand_des;
//                                        }

    ];
});
