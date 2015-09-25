<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HistorySales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_sales', function (Blueprint $table) {
            $table->increments('history_sales_id');
            $table->double('history_sales_amount')->unsigned();
            $table->string('history_sales_description');
            $table->string('history_sales_type');
            $table->date('history_sales_date');
            $table->string('history_sales_bill_pdf');
            $table->string('history_sales_remision_pdf');
            $table->date('history_sales_expires');
            $table->integer('history_sales_status')->unsigned();

            $table->integer('bills_id')->unsigned();
            $table->integer('sales_id')->unsigned();
            $table->integer('list_products_id')->unsigned();
            $table->integer('remision_id')->unsigned();

            $table->foreign('bills_id')->references('bills_id')->on('bills')->onDelete('cascade');
            $table->foreign('sales_id')->references('sales_id')->on('sales')->onDelete('cascade');
            $table->foreign('list_products_id')->references('list_products_id')->on('list_products')->onDelete('cascade');
            $table->foreign('remision_id')->references('remision_id')->on('remision')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('history_sales');
    }
}
