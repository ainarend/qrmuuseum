<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpoTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        /*Schema::create('expos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('expo_type_id')->unsigned();
            $table->timestamps();

            $table->foreign('expo_type_id')->references('id')->on('expo_types')->onDelete('cascade');
        });*/

        Schema::create('visited_expos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('expo_id')->unsigned();
            $table->boolean('remember')->unsigned();
            $table->timestamps();

            $table->foreign('expo_id')->references('id')->on('expos')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('expo_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('expo_pictures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->mediumText('url');
            $table->timestamps();
            $table->integer('expo_type_id')->unsigned();
            $table->foreign('expo_type_id')->references('id')->on('expo_types')->onDelete('cascade');
            $table->integer('expo_id')->unsigned();
            $table->foreign('expo_id')->references('id')->on('expos')->onDelete('cascade');
        });

        Schema::create('expo_quiz', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
            $table->integer('expo_type_id')->unsigned();
            $table->foreign('expo_type_id')->references('id')->on('expo_types')->onDelete('cascade');
            $table->integer('expo_id')->unsigned();
            $table->foreign('expo_id')->references('id')->on('expos')->onDelete('cascade');
        });

        Schema::create('expo_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quiz_id')->unsigned();
            $table->string('name');
            $table->string('answer1');
            $table->string('answer2');
            $table->string('answer3');
            $table->string('answer4');
            $table->timestamps();
            $table->integer('expo_type_id')->unsigned();
            $table->foreign('quiz_id')->references('id')->on('expo_quiz')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

