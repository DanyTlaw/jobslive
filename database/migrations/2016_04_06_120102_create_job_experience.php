<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobExperience extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profile_id')->unsigned()->nullable();
            $table->foreign('profile_id')->references('id')->on('profiles');
            $table->string('job_name')->nullable();
            $table->string('position')->nullable();
            $table->string('employment')->nullable();
            $table->string('employer')->nullable();
            $table->string('business')->nullable();
            $table->string('work_place')->nullable();
            $table->string('country')->nullable();
            $table->string('start_month')->nullable();
            $table->string('start_year')->nullable();
            $table->string('end_month')->nullable();
            $table->string('end_year')->nullable();
            $table->boolean('until_now')->nullable();
            $table->text('description')->nullable();
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
        Schema::drop('job_experiences');
    }
}
