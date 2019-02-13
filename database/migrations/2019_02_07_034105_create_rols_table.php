<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t002_us_rols', function (Blueprint $table) {
            $table->increments('f002_us_id_rol')->unique('f002_us_id_rol');
            $table->timestamps();
            $table->integer('f002_us_rol_cod')->unique();
            $table->string('f002_us_rol_des');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t002_us_rols');
    }
}
