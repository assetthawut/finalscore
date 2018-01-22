<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Choice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (Schema::hasTable('choice')) {
    //
    }else{        
        Schema::create('choice', function (Blueprint $table) {
            
            $table->integer('c_id')->autoIncrement();
            $table->string('c_detail',255);
            $table->string('c_img',255);
            $table->integer('c_score');
            $table->boolean('c_isCorrect');

            $table->integer('q_id'); //FK
            $table->integer('quiz_id'); //FK


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
