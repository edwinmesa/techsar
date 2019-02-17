<?php

use App\Models\CostItem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CostItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Item::class)->create()->each(function ($item) {

            $faker                              = Faker\Factory::create();
            static $itemDelivery                = 0.04;
            static $itemTaxes                   = 0.08;
            $values                             = $faker->numberBetween(100000,300000);
            $costManufacture                    = $values;
            $costInitial                        = ($costManufacture*0.45)+$costManufacture;
            $costSales                          = ($costInitial*0.15)+$costInitial;
            $costDelivery                       = $costSales*$itemDelivery;
            $costTaxes                          = $costSales*$itemTaxes;

            CostItem::create([
                'f200_mvt_id_item'              =>  $item->f153_mc_id_item,
                'f200_mvt_item_cod'             =>  $item->f153_mc_item_cod,
                'f200_mvt_item_des'             =>  $item->f153_mc_item_des,
                'f200_mvt_item_active'          =>  $item->f153_mc_item_active,
                'f200_mvt_item_model'           =>  $item->f153_mc_item_model,
                'f200_mvt_item_ean'             =>  $item->f153_mc_item_ean,
                'f200_mvt_item_date_fab'        =>  $item->f153_mc_item_date_fab,
                'f200_mvt_item_date_ven'        =>  $item->f153_mc_item_date_ven,
                'f200_mvt_brand'                =>  $item->f153_mc_brand,
                'f200_mvt_provider'             =>  $item->f153_mc_provider,
                'f200_mvt_category'             =>  $item->f153_mc_category,
                'f200_mvt_cost_initial'         =>  $costInitial,
                'f200_mvt_cost_manufacture'     =>  $costManufacture,
                'f200_mvt_cost_sales'           =>  $costSales,
                'f200_mvt_cost_delivery'        =>  $costDelivery,
                'f200_mvt_cost_taxes'           =>  $costTaxes
            ]);
        });




    }


}
