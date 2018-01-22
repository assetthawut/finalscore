<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoleUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         if (Schema::hasTable('roleuser')) {
        
        }else{
            Schema::create('roleuser', function (Blueprint $table) {
                $table->integer("r_id")->autoIncrement();
                $table->string("r_name",255);
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
