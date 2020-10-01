<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('questionare_id');
            $table->unsignedInteger('survey_id')->nullable();
            $table->string('npk')->nullable();
            $table->string('question_1')->nullable();
            $table->string('subject_1')->nullable();
            $table->string('question_2')->nullable();
            $table->string('subject_2')->nullable();
            $table->string('question_3')->nullable();
            $table->string('subject_3')->nullable();
            $table->string('question_4')->nullable();
            $table->string('subject_4')->nullable();
            $table->string('question_5')->nullable();
            $table->string('subject_5')->nullable();
            $table->string('question_6')->nullable();
            $table->string('subject_6')->nullable();
            $table->string('question_7')->nullable();
            $table->string('subject_7')->nullable();
            $table->string('question_8')->nullable();
            $table->string('subject_8')->nullable();
            $table->string('question_9')->nullable();
            $table->string('subject_9')->nullable();
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
        Schema::dropIfExists('answer_details');
    }
}
