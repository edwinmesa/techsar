<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t112_mm_providers', function (Blueprint $table) {
            $table->increments('f112_mm_id_providers')->unique('f112_mm_id_providers');
            $table->timestamps();
            $table->integer('f112_mm_provider_cod')->unique();
            $table->string('f112_mm_provider_des');
            $table->decimal('f112_mm_provider_taxes');
            $table->decimal('f112_mm_provider_delivery');
            $table->string('f112_mm_provider_email')->nullable();
            $table->integer('f112_mm_provider_phone')->nullable();
            $table->integer('f112_mm_id_provider_active')->default(1,0);
            $table->unsignedInteger('f112_mm_id_person');
            $table->foreign('f112_mm_id_person')
                ->references('f110_mm_id_person')
                ->on('t110_mm_persons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t112_mm_providers');
    }
}
