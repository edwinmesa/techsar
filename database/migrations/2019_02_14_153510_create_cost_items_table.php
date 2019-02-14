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
        Schema::create('t200_cost_items', function (Blueprint $table) {
            $table->increments('f200_mc_cost_item');
            $table->timestamps();
            $table->unsignedInteger('f200_mc_id_item');
            $table->integer('f200_mc_item_cod')->unique();
            $table->string('f200_mc_item_des');
            $table->unsignedInteger('f200_mc_id_warehouse')->nullable();
            $table->string('f200_mc_model_item');
            $table->integer('f200_mc_ean_item');
            $table->string('f200_mc_provider_item')->nullable();
            $table->integer('f200_mc_cant_init')->default(0);
            $table->integer('f200_mc_cant_disp')->default(0);
            $table->integer('f200_mc_cant_falt')->default(0);
            $table->double('f200_mc_cost_init')->default(0);
            $table->double('f200_mc_cost_man')->default(0);
            $table->double('f200_mc_cost_sal')->default(0);
            $table->double('f200_mc_cost_tax')->default(0);
//
//            INSERT INTO techsar.t200_cost_items (
//                f200_mc_id_item,
//                f200_mc_item_cod,
//                f200_mc_item_des,
//                f200_mc_model_item,
//                f200_mc_ean_item
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
//techsar.t153_mc_items

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t200_cost_items');
    }
}
