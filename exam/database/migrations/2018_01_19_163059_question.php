<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Question extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
   
        //
    
        if (Schema::hasTable('question')) {
    //
    }else{

         Schema::create('question', function (Blueprint $table) {
            $table->integer('q_id')->autoIncrement();
            $table->integer('quiz_id');
            $table->date('q_create');
            $table->date('q_lastUpdate');
            $table->string('q_detail',255);
            $table->string('q_img',255);


          /*  $table->string('name');
            $table->string('airline');
            $table->timestamps();
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
