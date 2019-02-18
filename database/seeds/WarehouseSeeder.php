<?php

use App\Models\OperationCenter;
use App\Models\Warehouse;
use Illuminate\Database\Seeder;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Warehouse::create([
            'f154_mc_cod_warehouse'     => 6501,
            'f154_mc_des_warehouse'     => 'Bogota',
            'f154_mc_id_op'             =>  $groupId = OperationCenter::where('f102_mm_op_cod', 6494)
                                            ->value('f102_mm_id_op'),
        ]);
    }
}
