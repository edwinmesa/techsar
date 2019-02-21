<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationsCenterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t102_mm_operations_center', function (Blueprint $table) {
            $table->increments('f102_mm_id_op')->unique('f102_mm_id_op');
            $table->timestamps();
            $table->integer('f102_mm_op_cod')->unique();
            $table->string('f102_mm_op_des');
            $table->unsignedInteger('f102_mm_id_regional');
            $table->foreign('f102_mm_id_regional')->references('f101_mm_id_regional')
                ->on('t101_mm_regional');
            $table->unsignedInteger('f102_mm_id_company');
            $table->foreign('f102_mm_id_company')->references('f100_mm_id_company')
                ->on('t100_mm_companies');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t102_mm_operations_center');
    }
}
