<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t001_us_professions', function (Blueprint $table) {
            $table->increments('f001_us_id_profession')->unique('f001_us_id_profession');
            $table->timestamps();
            $table->integer('f001_us_profession_cod')->unique();
            $table->string('f001_us_profession_des');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t001_us_professions');
    }
}
