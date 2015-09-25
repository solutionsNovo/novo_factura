<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Remision extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remision', function (Blueprint $table) {
            $table->increments('remision_id');
            $table->string('remision_name');
            $table->date('remision_arrival');
            $table->string('remision_business_name');
            $table->string('remision_ruc');
            $table->date('remision_date');
            $table->string('remision_driver');
            $table->string('remision_brand');
            $table->string('remision_plaque');
            $table->integer('remision_status')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('remision');
    }
}
