<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableAusbildung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profile_id')->unsigned()->nullable();
            $table->foreign('profile_id')->references('id')->on('profiles');
            $table->string('title')->nullable();
            $table->string('degree')->nullable();
            $table->string('subject')->nullable();
            $table->string('school')->nullable();
            $table->string('place')->nullable();
            $table->string('country')->nullable();
            $table->string('year')->nullable();
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
        Schema::drop('education');
    }
}
