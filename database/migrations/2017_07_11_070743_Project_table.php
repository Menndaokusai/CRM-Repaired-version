<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Projects',function (Blueprint $table){
            $table->increments('id');
            $table->string('Project_Name');
            $table->string('Type')->nullable();
            $table->string('Status')->nullable();
            $table->timestamp('Start_Date')->nullable();
            $table->timestamp('Target_End_Date')->nullable();
            $table->timestamp('Actual_End_Date')->nullable();
            $table->string('Target_Budget')->nullable();
            $table->string('Project_Url')->nullable();
            $table->string('Priority')->nullable();
            $table->string('Progress')->nullable();
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
        Schema::drop('Projects');
    }
}
