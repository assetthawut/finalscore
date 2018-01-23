<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        
        Schema::table('quiz', function (Blueprint $table) {
            //Schema::enableForeignKeyConstraints();
            //Test Quiz
                //$table->integer('u_id')->foreign('u_id')->references('user_id')->on('user')->change();
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
