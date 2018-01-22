<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuizHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (Schema::hasTable('quiz_history')) {
        
        }else{
            Schema::create('quiz_history', function (Blueprint $table) {
                $table->integer("qh_id")->autoIncrement();
                $table->integer("quiz_id");
                $table->integer("q_id");
                $table->integer("u_id");
                $table->boolean("c_isCorrect");
                $table->integer("c_score");
            });
        }      
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
