<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuizHistoryFx extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('quiz_history', function (Blueprint $table) {
            $table->integer('u_id')->change();
            $table->foreign('u_id')->references('user_id')->on('user');

            $table->integer('quiz_id')->change();
            $table->foreign('quiz_id')->references('quiz_id')->on('quiz');

            $table->integer('q_id')->change();
            $table->foreign('q_id')->references('q_id')->on('question');   

            $table->integer('c_id')->change();
            $table->foreign('c_id')->references('c_id')->on('choice');            
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
