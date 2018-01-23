<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentReportFx extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('student_report', function (Blueprint $table) {
            $table->integer('u_id')->change();
            $table->foreign('u_id')->references('user_id')->on('user');

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
