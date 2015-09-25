<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('products_id');
            $table->string('products_name');
            $table->integer('products_stock')->unsigned();
            $table->double('products_cost')->unsigned();
            $table->double('products_price')->unsigned();
            $table->double('products_price_unitary')->unsigned();
            $table->integer('products_quantity')->unsigned();
            $table->string('products_description');
            $table->string('products_type');
            $table->string('products_code');
            $table->string('products_photo');
            $table->integer('products_status')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
