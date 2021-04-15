<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sitedata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Saving site data into this table
        Schema::create('sitedata', function (Blueprint $table){
            $table->id();
            $table->string('incomelist')->nullable();
            $table->string('qualificationlist')->nullable();
            $table->string('jobprofile')->nullable();
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
        Schema::drop('sitedata');
    }
}
