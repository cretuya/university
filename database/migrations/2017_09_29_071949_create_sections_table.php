<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->integer('section_num')->unique();
            $table->string('instructor', 100);
            $table->string('semester');
            $table->string('year');
            $table->integer('code');
            $table->foreign('code')->references('code')->on('departments')->onDelete('cascade'); 
            $table->integer('course_id');
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');     
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
        Schema::dropIfExists('sections');
    }
}
