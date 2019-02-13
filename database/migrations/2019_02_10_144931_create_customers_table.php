<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t111_mm_customers', function (Blueprint $table) {
            $table->increments('f111_mm_id_customer')->unique('f111_mm_id_customer');
            $table->timestamps();
            $table->integer('f111_mm_customer_cod')->unique();
            $table->string('f111_mm_customer_des');
            $table->string('f111_mm_customer_email')->nullable();
            $table->integer('f111_mm_customer_phone')->nullable();
            $table->integer('f111_mm_id_customer_active')->default(1,0);
            $table->unsignedInteger('f111_mm_id_person');
            $table->foreign('f111_mm_id_person')
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
        Schema::dropIfExists('t111_mm_customers');
    }
}
