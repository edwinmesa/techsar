<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t153_mc_items', function (Blueprint $table) {
            $table->increments('f153_mc_id_item')->unique('f153_mc_id_item');
            $table->timestamps();
            $table->integer('f153_mc_item_cod')->unique();
            $table->string('f153_mc_item_des');
            $table->string('f153_mc_item_brand');
            $table->integer('f153_mc_item_active')->default(1,0);
            $table->string('f153_mc_item_model')->nullable();;
            $table->string('f153_mc_item_ean');
            $table->dateTime('f153_mc_item_date_fab')->nullable();
            $table->dateTime('f153_mc_item_date_ven')->nullable();
            $table->string('f153_mc_item_provider')->nullable();
            $table->unsignedInteger('f153_mc_id_category');
            $table->foreign('f153_mc_id_category')
                ->references('f152_mc_id_category')
                ->on('t152_mc_categories');
            $table->unsignedInteger('f153_mc_id_brand');
            $table->foreign('f153_mc_id_brand')
                ->references('f150_mc_id_brand')
                ->on('t150_mc_brands');
            $table->unsignedInteger('f153_mc_id_provider');
            $table->foreign('f153_mc_id_provider')
                ->references('f112_mm_id_providers')
                ->on('t112_mm_providers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t153_mc_items');
    }
}
