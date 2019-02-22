<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t152_mc_categories', function (Blueprint $table) {
            $table->increments('f152_mc_id_category')->unique('f152_mc_id_category');
            $table->unsignedInteger('f152_mc_id_company');
            $table->timestamps();
            $table->integer('f152_mc_category_cod')->unique();
            $table->string('f152_mc_category_des');
            $table->unsignedInteger('f152_mc_id_group');
            $table->foreign('f152_mc_id_group')
                ->references('f151_mc_id_group')
                ->on('t151_mc_groups');
            $table->foreign('f152_mc_id_company')
                ->references('f100_mm_id_company')
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
        Schema::dropIfExists('t152_mc_categories');
    }
}
