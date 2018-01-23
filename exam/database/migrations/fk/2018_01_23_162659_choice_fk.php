<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChoiceFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('choice', function (Blueprint $table) {
            $table->integer('q_id')->change();
            $table->foreign('q_id')->references('q_id')->on('question');

            $table->integer('quiz_id')->change();
            $table->foreign('quiz_id')->references('quiz_id')->on('quiz');
            
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
