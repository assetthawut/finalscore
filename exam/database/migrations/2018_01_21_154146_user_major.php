<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserMajor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         if (Schema::hasTable('user_major')) {
        
        }else{
            Schema::create('user_major', function (Blueprint $table) {
                $table->increments("m_id");
                $table->string("m_name",255);
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
