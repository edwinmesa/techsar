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
            $table->foreign('f200_mvt_id_item')
                ->references('f153_mc_id_item')
                ->on('t153_mc_items');
            $table->integer('f200_mvt_item_cod')->unique();
            $table->string('f200_mvt_item_des');
            $table->integer('f200_mvt_item_active')->default(1,0);
            $table->string('f200_mvt_item_model')->nullable();;
            $table->string('f200_mvt_item_ean');
            $table->dateTime('f200_mvt_item_date_fab')->nullable();
            $table->dateTime('f200_mvt_item_date_ven')->nullable();
            $table->string('f200_mvt_brand');
            $table->string('f200_mvt_provider');
            $table->string('f200_mvt_category');
            $table->string('f200_mvt_id_category');
            $table->integer('f200_mvt_cant_initial')->default(0);
            $table->integer('f200_mvt_cant_available')->default(0);
            $table->integer('f200_mvt_cant_lack')->default(0);
            $table->double('f200_mvt_cost_initial')->default(0);
            $table->double('f200_mvt_cost_manufacture')->default(0);
            $table->double('f200_mvt_cost_sales')->default(0);
            $table->double('f200_mvt_cost_delivery')->default(0);
            $table->double('f200_mvt_cost_taxes')->default(0);

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
