<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->increments('product_categories_id');

            $table->integer('products_id')->unsigned();
            $table->integer('category_id')->unsigned();

            $table->foreign('products_id')->references('products_id')->on('products')->onDelete('cascade');
            $table->foreign('category_id')->references('category_id')->on('category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_categories');
    }
}
