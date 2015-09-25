<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompanyEmployees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_employees', function (Blueprint $table) {
            $table->increments('company_employees_id');

            $table->integer('company_id')->unsigned();
            $table->integer('employees_id')->unsigned();

            $table->foreign('company_id')->references('company_id')->on('company')->onDelete('cascade');
            $table->foreign('employees_id')->references('employees_id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('company_employees');
    }
}
