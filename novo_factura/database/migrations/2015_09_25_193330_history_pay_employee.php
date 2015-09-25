<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HistoryPayEmployee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_pay_employee', function (Blueprint $table) {
            $table->increments('history_pay_employee_id');
            $table->double('history_pay_employee_amount')->unsigned();
            $table->string('history_pay_employee_description');
            $table->date('history_pay_employee_date');
            $table->integer('history_pay_employee_status')->unsigned();

            $table->integer('employees_id')->unsigned();
            $table->integer('pay_id')->unsigned();

            $table->foreign('employees_id')->references('employees_id')->on('employees')->onDelete('cascade');
            $table->foreign('pay_id')->references('pay_id')->on('pay')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('history_pay_employee');
    }
}
