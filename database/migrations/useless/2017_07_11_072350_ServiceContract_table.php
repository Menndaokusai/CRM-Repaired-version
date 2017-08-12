<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServiceContractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ServiceContracts',function (Blueprint $table){
            $table->increments('id');
            $table->string('Subject');
            $table->string('Status')->nullable();
            $table->string('Type')->nullable();
            $table->timestamp('Start_Date')->nullable();
            $table->timestamp('End_Date')->nullable();
            $table->string('Tracking_Unit')->nullable();
            $table->string('Total_Units')->nullable();
            $table->string('Used_Units')->nullable();
            $table->string('Related')->nullable();
            $table->string('Priority')->nullable();
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
        Schema::drop('ServiceContracts');
    }
}
