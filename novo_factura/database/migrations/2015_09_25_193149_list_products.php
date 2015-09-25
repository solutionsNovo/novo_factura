<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ListProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_products', function (Blueprint $table) {
            $table->increments('list_products_id');
            $table->date('list_products_date');

            $table->integer('products_id')->unsigned();

            $table->foreign('products_id')->references('products_id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('list_products');
    }
}
