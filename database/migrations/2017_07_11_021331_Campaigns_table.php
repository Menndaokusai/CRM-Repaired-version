<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Campaigns',function (Blueprint $table){
            $table->increments('id');
            $table->string('Campaign_Name');
            $table->string('Status')->nullable();
            $table->string('Type')->nullable();
            $table->timestamp('Expected_Close_Date');
            $table->string('Sponsor')->nullable();
            $table->string('Target_Audience')->nullable();
            $table->string('Target_Size')->nullable();
            $table->string('Num_Sent')->nullable();
            $table->string('Budget_Cost')->nullable();
            $table->string('Actual_Cost')->nullable();
            $table->string('Expected_Response')->nullable();
            $table->string('Expected_Revenue')->nullable();
            $table->string('Expected_Sales_Count')->nullable();
            $table->string('Actual_Sales_Count')->nullable();
            $table->string('Expected_Response_Count')->nullable();
            $table->string('Actual_Response_Count')->nullable();
            $table->string('Expected_ROI')->nullable();
            $table->string('Actual_ROI')->nullable();
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
        Schema::drop('Campaigns');
    }
}
