<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t101_mm_regional', function (Blueprint $table) {
            $table->increments('f101_mm_id_regional')->unique('f101_mm_id_regional');
            $table->timestamps();
            $table->integer('f101_mm_regional_cod');
            $table->string('f101_mm_regional_des');
            $table->unsignedInteger('f101_mm_id_company');
            $table->foreign('f101_mm_id_company')->references('f100_mm_id_company')
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
        Schema::dropIfExists('t101_mm_regional');
    }
}
