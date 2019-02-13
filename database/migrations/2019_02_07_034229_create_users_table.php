<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::create('t005_us_users', function (Blueprint $table) {
            $table->increments('f005_us_id_user')->unique('f003_us_id_user');
            $table->integer('f005_us_nic')->unique();
            $table->string('f005_us_fname');
            $table->string('f005_us_user');
            $table->string('f005_us_password');
            $table->string('f005_us_email')->unique();
            $table->integer('f005_us_phone');
            $table->timestamp('f005_email_verified_at')->nullable();
            $table->unsignedInteger('f005_us_id_profession');
            $table->foreign('f005_us_id_profession')
                ->references('f001_us_id_profession')
                ->on('t001_us_professions');
            $table->unsignedInteger('f005_us_id_rol');
            $table->foreign('f005_us_id_rol')
                ->references('f002_us_id_rol')
                ->on('t002_us_rols');
            $table->unsignedInteger('f005_us_id_area');
            $table->foreign('f005_us_id_area')
                ->references('f003_us_id_area')
                ->on('t003_us_areas');
            $table->unsignedInteger('f005_us_id_active');
            $table->foreign('f005_us_id_active')
                ->references('f004_us_active_id')
                ->on('t004_us_active');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down ()
    {
        Schema::dropIfExists('t005_us_users');
    }
}
