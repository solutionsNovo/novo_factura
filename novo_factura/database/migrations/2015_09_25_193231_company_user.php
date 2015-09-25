<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompanyUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_user', function (Blueprint $table) {
            $table->increments('company_user_id');

            $table->integer('company_id')->unsigned();
            $table->integer('users_id')->unsigned();

            $table->foreign('company_id')->references('company_id')->on('company')->onDelete('cascade');
            $table->foreign('users_id')->references('users_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('company_user');
    }
}
