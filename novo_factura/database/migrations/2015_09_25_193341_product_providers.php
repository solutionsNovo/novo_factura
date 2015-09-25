<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductProviders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_providers', function (Blueprint $table) {
            $table->increments('product_providers_id');

            $table->integer('products_id')->unsigned();
            $table->integer('providers_id')->unsigned();

            $table->foreign('products_id')->references('products_id')->on('products')->onDelete('cascade');
            $table->foreign('providers_id')->references('providers_id')->on('providers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_providers');
    }
}
