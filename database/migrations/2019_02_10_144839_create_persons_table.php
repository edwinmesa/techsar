<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::create('t110_mm_persons', function (Blueprint $table) {
            $table->increments('f110_mm_id_person')->unique('f110_mm_id_person');
            $table->timestamps();
            $table->integer('f110_mm_person_cod')->unique();
            $table->string('f110_mm_person_des');
            $table->string('f110_mm_person_fullName');
            $table->string('f110_mm_person_password');
            $table->string('f110_mm_person_email')->nullable();
            $table->integer('f110_mm_person_phone')->nullable();
            $table->integer('f110_mm_id_person_active')->default(1,0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down ()
    {
        Schema::dropIfExists('t110_mm_persons');
    }
}
