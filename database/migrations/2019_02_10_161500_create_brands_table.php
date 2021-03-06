<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t150_mc_brands', function (Blueprint $table) {
            $table->increments('f150_mc_id_brand')->unique('f151_mc_id_brand');
            $table->unsignedInteger('f150_mc_id_company');
            $table->timestamps();
            $table->integer('f150_mc_brand_cod')->unique();
            $table->string('f150_mc_brand_des');
            $table->string('f150_mc_brand_abv');
            $table->unsignedInteger('f150_mc_id_provider');
            $table->foreign('f150_mc_id_provider')
                ->references('f112_mm_id_providers')
                ->on('t112_mm_providers');
            $table->foreign('f150_mc_id_company')
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
        Schema::dropIfExists('t150_mc_brands');
    }
}
