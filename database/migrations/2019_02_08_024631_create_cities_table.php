<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t011_rg_city', function (Blueprint $table) {
            $table->increments('f011_rg_id_city')->unique('f011_rg_id_city');
            $table->timestamps();
            $table->string('f011_rg_description');
            $table->unsignedInteger('f011_rg_id_state');
            $table->foreign('f011_rg_id_state')->references('f010_rg_id_state')->on('t010_rg_states');
            $table->unsignedInteger('f011_rg_id_country');
            $table->foreign('f011_rg_id_country')->references('f009_rg_id_country')->on('t009_rg_countries');
            $table->decimal('f011_rg_latitude');
            $table->decimal('f011_rg_longitude');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t011_rg_city');
    }
}
