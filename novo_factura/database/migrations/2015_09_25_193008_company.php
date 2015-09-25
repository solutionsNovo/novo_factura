<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Company extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->increments('company_id');
            $table->string('company_name');
            $table->string('company_direction');
            $table->string('company_phone');
            $table->string('company_vision');
            $table->string('company_mision');
            $table->string('company_description');
            $table->string('email')->unique();
            $table->string('company_photo');
            $table->integer("company_status")->unsigned();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('company');
    }
}
