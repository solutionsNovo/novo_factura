<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HistoryShopping extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_shopping', function (Blueprint $table) {
            $table->increments('history_shopping_id');
            $table->double('history_shopping_amount')->unsigned();
            $table->string('history_shopping_description');
            $table->string('history_shopping_type');
            $table->date('history_shopping_date');
            $table->string('history_shopping_bill_pdf');
            $table->string('history_shopping_reciver');
            $table->string('history_shopping_credit');
            $table->integer('history_shopping_status')->unsigned();

            $table->integer('bills_id')->unsigned();
            $table->integer('providers_id')->unsigned();
            $table->integer('shopping_id')->unsigned();

            $table->foreign('bills_id')->references('bills_id')->on('bills')->onDelete('cascade');
            $table->foreign('providers_id')->references('providers_id')->on('providers')->onDelete('cascade');
            $table->foreign('shopping_id')->references('shopping_id')->on('shopping')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('history_shopping');
    }
}
