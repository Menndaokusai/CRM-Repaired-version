<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OpportunityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Opportunities',function (Blueprint $table){
            $table->increments('id');
            $table->string('Opportunity_Name');
            $table->string('Account_Name')->nullable();
            $table->string('Contact_Name')->nullable();
            $table->string('Amount')->nullable();
            $table->string('Type')->nullable();
            $table->timestamp('Expected_Close_Date')->nullable();
            $table->string('Sales_Stage');
            $table->string('Probability')->nullable();
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
        Schema::drop('Opportunities');
    }
}
