<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountrysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t009_rg_countries', function (Blueprint $table) {
            $table->increments('f009_rg_id_country')->unique('f009_rg_id_country');
            $table->timestamps();
            $table->string('f009_rg_iso_country')->unique();
            $table->string('f009_rg_country_des');
            $table->string('f009_rg_desc_local')->nullable();
            $table->string('f009_rg_cod_web')->unique();
            $table->string('f009_rg_region')->nullable();
            $table->string('f009_rg_continent')->nullable();
            $table->decimal('f009_rg_latitude');
            $table->decimal('f009_rg_longitude');
            $table->integer('f009_rg_area')->nullable();
            $table->integer('f009_rg_population')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t009_rg_countries');
    }
}
