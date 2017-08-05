<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Customers',function (Blueprint $table){
            $table->increments('id');
            $table->string('Account_Name');
            $table->string('Account_Type')->nullable();
            $table->string('Primary_Phone');
            $table->string('Alternate_Phone')->nullable();
            $table->text('province')->nullable();
            $table->text('city')->nullable();
            $table->text('detail')->nullable();
            $table->string('Ownership')->nullable();
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
        Schema::drop('Customers');
    }
}
