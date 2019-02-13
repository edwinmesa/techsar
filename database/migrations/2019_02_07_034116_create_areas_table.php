<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t003_us_areas', function (Blueprint $table) {
            $table->increments('f003_us_id_area')->unique('f003_us_id_area');
            $table->timestamps();
            $table->integer('f003_us_area_cod')->unique();
            $table->string('f003_us_area_des');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t003_us_areas');
    }
}
