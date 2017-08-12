<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tickets',function (Blueprint $table){
            $table->increments('id');
            $table->string('Title');
            $table->string('Account_Name')->nullable();
            $table->unsignedInteger('Contact_ID')->nullable();
//            $table->string('Product_Name')->nullable();
            $table->string('Status');
            $table->string('Severity')->nullable();
            $table->string('Hours')->nullable();
            $table->string('Days')->nullable();
            $table->string('Category')->nullable();
            $table->string('Priority');
            $table->string('Description')->nullable();
            $table->string('Solution')->nullable();
            $table->string('Manager');
            $table->timestamps();

            $table->foreign('Contact_ID')->references('id')->on('contacts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Tickets');
    }
}
