<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradereportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gradereports', function (Blueprint $table) {
            $table->integer('student_id');
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');      
            $table->integer('section_num');
            $table->foreign('section_num')->references('section_num')->on('sections')->onDelete('cascade');
            $table->integer('numeric_grade');    
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
        Schema::dropIfExists('gradereports');
    }
}
