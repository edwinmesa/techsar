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
            $table->unsignedInteger('f154_mc_id_op');
            $table->foreign('f154_mc_id_op')
                ->references('f102_mm_id_op')
                ->on('t102_mm_operations_center');


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
