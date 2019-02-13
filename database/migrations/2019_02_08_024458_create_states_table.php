<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t010_rg_states', function (Blueprint $table) {
            $table->increments('f010_rg_id_state')->unique('f010_rg_id_state');
            $table->timestamps();
            $table->unsignedInteger('f010_rg_id_country');
            $table->foreign('f010_rg_id_country')
                ->references('f009_rg_id_country')
                ->on('t009_rg_countries');
            $table->string('f010_rg_description');
            $table->decimal('f010_rg_latitude');
            $table->decimal('f010_rg_longitude');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t010_rg_states');
    }
}
