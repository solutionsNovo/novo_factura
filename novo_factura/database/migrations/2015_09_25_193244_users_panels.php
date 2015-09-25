<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersPanels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_panels', function (Blueprint $table) {
            $table->increments('users_panels_id');

            $table->integer('users_id')->unsigned();
            $table->integer('panel_id')->unsigned();

            $table->foreign('users_id')->references('users_id')->on('users')->onDelete('cascade');
            $table->foreign('panel_id')->references('panel_id')->on('panel')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users_panels');
    }
}
