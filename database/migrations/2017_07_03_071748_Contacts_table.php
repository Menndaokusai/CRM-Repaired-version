<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Contacts',function (Blueprint $table){
            $table->increments('id');
            $table->string('Contact_Name');
            $table->string('Mobile_Phone');
            $table->string('Home_Phone')->nullable();
            $table->string('Office_Phone')->nullable();
            $table->text('city')->nullable();
            $table->string('Asst_Phone')->nullable();
            $table->string('Asst_Name')->nullable();
            $table->string('Sex')->nullable();
            $table->string('Department')->nullable();
            $table->string('Designation')->nullable();
            $table->string('Email')->nullable();
            $table->string('Company')->nullable();
            $table->string('Manager');
            $table->timestamp('Birth')->nullable();
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
        Schema::drop('Contacts');
    }
}
