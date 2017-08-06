<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PotentialCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PotentialCustomers',function (Blueprint $table){
            $table->increments('id');
            $table->string('PC_Name');
            $table->string('Industry');
            $table->string('Primary_Phone');
            $table->string('Mobile_Phone')->nullable();
            $table->text('city')->nullable();
            $table->string('Company')->nullable();
            $table->string('Email')->nullable();
            $table->string('Manager');
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
        Schema::drop('PotentialCustomers');
    }
}
