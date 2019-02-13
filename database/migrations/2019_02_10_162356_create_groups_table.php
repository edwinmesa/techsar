<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t151_mc_groups', function (Blueprint $table) {
            $table->increments('f151_mc_id_group')->unique('f151_mc_id_group');
            $table->timestamps();
            $table->integer('f151_mc_group_cod')->unique();
            $table->string('f151_mc_group_des');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t151_mc_groups');
    }
}
