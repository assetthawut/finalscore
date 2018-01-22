<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         if (Schema::hasTable('user')) {
        
        }else{
            Schema::create('user', function (Blueprint $table) {
                $table->integer("user_id")->autoIncrement();
                $table->string("u_username",255);
                $table->string("u_password",255);
                $table->string("u_name",255);
                $table->string("u_surname",255);
                $table->date("u_birthdate");
                $table->string("u_img",255);
                $table->integer("r_id");
                $table->integer("m_id");

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
