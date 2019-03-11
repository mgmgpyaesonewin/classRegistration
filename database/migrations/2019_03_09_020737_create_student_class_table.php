<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_class', function (Blueprint $table) {
            $table->unsignedInteger('id')->unique();
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('student');
            $table->integer('class_id')->unsigned();
            $table->foreign('class_id')->references('id')->on('class');
            $table->integer('status');
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
        Schema::dropIfExists('student_class');
    }
}
