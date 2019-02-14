<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t154_mc_warehouses', function (Blueprint $table) {
            $table->increments('f154_mc_id_warehouse')->unique('f154_mc_id_warehouse');
            $table->timestamps();
            $table->integer('f154_mc_cod_warehouse')->unique();
            $table->string('f154_mc_des_warehouse');
            $table->unsignedInteger('f154_mc_id_item');
            $table->foreign('f154_mc_id_item')->references('f153_mc_id_item')->on('t153_mc_items');
            $table->string('f154_mc_model_item');
            $table->integer('f154_mc_ean_item');
            $table->string('f154_mc_provider_item');
            $table->integer('f154_mc_cant_init')->default(0);
            $table->integer('f154_mc_cant_disp')->default(0);
            $table->integer('f154_mc_cant_falt')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wineries');
    }
}
