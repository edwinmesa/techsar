<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t250_mvt_inventories', function (Blueprint $table) {
            $table->increments('f200_mvt_id_inventories');
            $table->timestamps();
            $table->integer('f250_mvt_item_cod')->unique();
            $table->string('f250_mvt_item_des');
            $table->string('f250_mvt_item_model')->nullable();;
            $table->string('f250_mvt_item_ean');
            $table->string('f250_mvt_brand');
            $table->string('f250_mvt_provider');
            $table->string('f250_mvt_category');
            $table->string('f250_mvt_id_category');
            $table->integer('f250_mvt_cant_initial');
            $table->integer('f250_mvt_cant_available');
            $table->integer('f250_mvt_cant_lack');
            $table->double('f250_mvt_cost_initial');
            $table->double('f250_mvt_cost_manufacture');
            $table->double('f250_mvt_cost_sales');
            $table->double('f250_mvt_cost_delivery');
            $table->double('f250_mvt_cost_taxes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t250_mvt_inventories');
    }
}
