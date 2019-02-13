<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t004_us_active', function (Blueprint $table) {
            $table->increments('f004_us_active_id')->unique('f004_us_active_id');
            $table->timestamps();
            $table->integer('f004_us_active_cod')->unique();
            $table->string('f004_us_active_des');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t004_us_active');
    }
}
