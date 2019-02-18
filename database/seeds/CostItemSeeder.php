<?php

use App\Models\Category;
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
    public function run ()
    {
        factory(App\Models\Item::class)->create()->each(function ($item) {
            static $costDel = 0.04;
            static $costTax = 0.08;
            static $incrementProd = 0.45;
            static $incrementVent = 0.15;

            $categoryId = DB::table('t152_mc_categories')
                ->where('f152_mc_id_category', $item->f153_mc_id_category)->get();

            $plucked = $categoryId->pluck('f152_mc_id_category');
            $plucked->all();

            $valuesId = $this->getValuesId($plucked);


//            $valueCategoryId = $categoryId->random()->f152_mc_id_category;

            $values = $this->costManufacture($valuesId);
            $costManufacture = $values;
            $costInitial = $this->costInitial($costManufacture, $incrementProd);
            $costSales = $this->costSales($costInitial, $incrementVent);
            $costDelivery = $this->costDelivery($costSales, $costDel);
            $costTaxes = $this->costTaxes($costSales, $costTax);

            CostItem::create([
                'f200_mvt_id_item' => $item->f153_mc_id_item,
                'f200_mvt_item_cod' => $item->f153_mc_item_cod,
                'f200_mvt_item_des' => $item->f153_mc_item_des,
                'f200_mvt_item_active' => $item->f153_mc_item_active,
                'f200_mvt_item_model' => $item->f153_mc_item_model,
                'f200_mvt_item_ean' => $item->f153_mc_item_ean,
                'f200_mvt_item_date_fab' => $item->f153_mc_item_date_fab,
                'f200_mvt_item_date_ven' => $item->f153_mc_item_date_ven,
                'f200_mvt_brand' => $item->f153_mc_brand,
                'f200_mvt_provider' => $item->f153_mc_provider,
                'f200_mvt_category' => $item->f153_mc_category,
                'f200_mvt_id_category' => $item->f153_mc_id_category,
                'f200_mvt_cost_initial' => $costInitial,
                'f200_mvt_cost_manufacture' => $costManufacture,
                'f200_mvt_cost_sales' => $costSales,
                'f200_mvt_cost_delivery' => $costDelivery,
                'f200_mvt_cost_taxes' => $costTaxes
            ]);
        });
    }

    public function costManufacture ($value)
    {
        $faker = Faker\Factory::create();
        $min = 10000;
        $minMax = 100000;
        $medMin = 110000;
        $medMax = 500000;
        $maxMin = 510000;
        $max = 3000000;

        if ($value == 2) {
            return $faker->numberBetween($medMin, $medMax);
        } else if ($value == 3) {
            return $faker->numberBetween($maxMin, $max);
        }
    }

    public function costInitial ($costProd, $incrementProd)
    {
        return ($costProd * $incrementProd) + $costProd;
    }

    public function costSales ($costInitial, $incrementVent)
    {
        return ($costInitial * $incrementVent) + $costInitial;
    }

    public function costDelivery ($costSales, $costDelivery)
    {
        return ($costSales * $costDelivery);
    }

    public function costTaxes ($costSales, $costTaxes)
    {
        return ($costSales * $costTaxes);
    }

    public function getValuesId($values)
    {
        foreach ($values as $value){
            return $value;
        }
    }


}


