<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t200_mvt_cost_items', function (Blueprint $table) {
            $table->increments('f200_mvt_id_cost_item')->unique('f200_mvt_id_cost_item');
            $table->timestamps();
            $table->unsignedInteger('f200_mvt_id_item');
            $table->integer('f200_mvt_item_cod')->unique();
            $table->string('f200_mvt_item_des');
            $table->unsignedInteger('f200_mvt_id_warehouse')->nullable();
            $table->string('f200_mvt_model_item');
            $table->integer('f200_mvt_ean_item');
            $table->string('f200_mvt_provider_item')->nullable();
            $table->integer('f200_mvt_cant_initial')->default(0);
            $table->integer('f200_mvt_cant_available')->default(0);
            $table->integer('f200_mvt_cant_lack')->default(0);
            $table->double('f200_mvt_cost_initial')->default(0);
            $table->double('f200_mvt_cost_manufacture')->default(0);
            $table->double('f200_mvt_cost_sales')->default(0);
            $table->double('f200_mvt_cost_delivery')->default(0);
            $table->double('f200_mvt_cost_taxes')->default(0);


//
//            INSERT INTO techsar.t200_cost_items (
//                f200_mvt_id_item,
//                f200_mvt_item_cod,
//                f200_mvt_item_des,
//                f200_mvt_model_item,
//                f200_mvt_ean_item
//
//            )
//SELECT
//f153_mc_id_item,
//f153_mc_item_cod,
//f153_mc_item_des,
//f153_mc_item_model,
//f153_mc_item_ean
//
//FROM
//
//techsar.t153_mvt_items

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t200_mvt_cost_items');
    }
}
