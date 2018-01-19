<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Quiz extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Quiz', function (Blueprint $table) {
             $table->integer('quiz_id')->autoIncrement();
             $table->date('quiz_create');
             $table->date('quiz_lastUpdate');
             $table->integer('u_id');
             $table->string('quiz_subject',255);
             $table->string('quiz_type',255);
             $table->string('quiz_grade',255);
             $table->integer('quiz_totalScore');
             //$table->primary('quiz_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Quiz', function (Blueprint $table) {
            //
        });
    }
}
