<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserFx extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('user', function (Blueprint $table) {
            $table->integer('r_id')->change();
            $table->foreign('r_id')->references('r_id')->on('roleuser');

            $table->integer('m_id')->change();
            $table->foreign('m_id')->references('m_id')->on('user_major');
           
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
