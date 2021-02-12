<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateErrorCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('error_codes', function (Blueprint $table) {
            $table->id();
            $table->string('errorCode');
            $table->text('explanation');
            $table->timestamps();
        });

        Schema::create('error_code_question', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('error_code_id');
            $table->unsignedBigInteger('question_id');
            $table->timestamps();

            $table->unique(['error_code_id', 'question_id']);

            $table->foreign('error_code_id')->references('id')->on('error_codes')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('error_codes');
    }
}
