<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t100_mm_companies', function (Blueprint $table) {
            $table->increments('f100_mm_id_company')->unique('f100_mm_id_company');
            $table->timestamps();
            $table->integer('f100_mm_company_cod')->unique();
            $table->string('f100_mm_company_des');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t100_mm_companies');
    }
}
