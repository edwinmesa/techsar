<?php

use App\Models\OperationCenter;
use App\Models\Regional;
use Illuminate\Database\Seeder;

class OperationCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regionaColId = Regional::where('f101_mm_regional_cod', '025')
            ->value('f101_mm_id_regional');

        $regionaEuId = Regional::where('f101_mm_regional_cod', '027')
            ->value('f101_mm_id_regional');

        $regionaEuroId = Regional::where('f101_mm_regional_cod', '028')
            ->value('f101_mm_id_regional');

        OperationCenter::create([
            'f102_mm_op_cod'     => 6494,
            'f102_mm_op_des'     => 'Colombia Sar Operations Bogota',
            'f102_mm_id_regional' => $regionaColId

        ]);

        OperationCenter::create([
            'f102_mm_op_cod' => 6495,
            'f102_mm_op_des' => 'Colombia Sar Operations Medellin',
            'f102_mm_id_regional' => $regionaColId
        ]);

        OperationCenter::create([
            'f102_mm_op_cod' => 2554,
            'f102_mm_op_des' => 'EEUU Sar Operations San Francisco',
            'f102_mm_id_regional' => $regionaEuId

        ]);

        OperationCenter::create([
            'f102_mm_op_cod' => 2555,
            'f102_mm_op_des' => 'EEUU Sar Operations Virginia',
            'f102_mm_id_regional' => $regionaEuId

        ]);

        OperationCenter::create([
            'f102_mm_op_cod' => 6881,
            'f102_mm_op_des' => 'Paris Sar Operations',
            'f102_mm_id_regional' => $regionaEuroId

        ]);
    }
}
