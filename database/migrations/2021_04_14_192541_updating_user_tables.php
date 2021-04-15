<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatingUserTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('city')->nullable();
            $table->string('live_with_family')->nullable();
            $table->string('height')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('subcaste')->nullable();
            $table->string('highest_qualification')->nullable();
            $table->string('working_in')->nullable();
            $table->string('jobprofile')->nullable();
            $table->string('annual_income')->nullable();
            $table->string('bio')->nullable();
            $table->string('mobileno')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('city');
            $table->dropColumn('live_with_family');
            $table->dropColumn('height');
            $table->dropColumn('marital_status');
            $table->dropColumn('subcaste');
            $table->dropColumn('highest_qualification');
            $table->dropColumn('working_in');
            $table->dropColumn('jobprofile');
            $table->dropColumn('annual_income');
            $table->dropColumn('bio');
            $table->dropColumn('mobileno');
        });
    }
}
