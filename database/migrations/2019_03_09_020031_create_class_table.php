<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class', function (Blueprint $table) {
            $table->unsignedInteger('id')->unique();
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('course');
            $table->integer('fee');
            $table->string('teacher_name');
            $table->string('from_time');
            $table->string('to_time');
            $table->string('from_day');
            $table->string('to_day');
            $table->date('from_date');
            $table->date('to_date');
            $table->string('no_of_student');
            $table->string('address');
            $table->integer('phone_no');
            $table->integer('active_flg');
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
        Schema::dropIfExists('class');
    }
}
