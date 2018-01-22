<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentReport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    if (Schema::hasTable('student_report')) {
    //
    }else{          
        Schema::create('student_report', function (Blueprint $table) {
            $table->integer('s_id')->autoIncrement();
            $table->integer('quiz_id');
            $table->integer('u_id');
            $table->date('s_successDate');
            $table->integer('s_time');
            $table->integer('s_c_item');
            $table->integer('s_w_item');
            $table->integer('s_c_score');
            $table->integer('s_w_score');
            $table->boolean('s_isSubmit');

           /* 
            $table->increments('c_id');
            $table->string('c_detail',255);
            $table->string('c_img',255);
            $table->integer('c_score');
            $table->boolean('c_isCorrect');

            $table->integer('q_id'); //FK
            $table->integer('quiz_id'); //FK

            */



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
