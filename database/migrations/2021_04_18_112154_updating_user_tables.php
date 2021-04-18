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
            $table->integer('age')->nullable();
            $table->date('dob')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('height')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('highest_qualification')->nullable();
            $table->string('college_attended')->nullable();
            $table->string('working_for')->nullable();
            $table->string('working_as')->nullable();
            $table->string('annual_income')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->integer('no_of_brothers')->nullable();
            $table->integer('no_of_sisters')->nullable();
            $table->string('native_place')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('mother_tongue')->nullable();
            $table->time('tob')->nullable();
            $table->string('cob')->nullable();
            $table->string('subcaste')->nullable();
            $table->string('gotra')->nullable();
            $table->string('manglik')->nullable();
            $table->string('sun_sign')->nullable();
            $table->string('mobile_no')->nullable()->unique();
            $table->string('gender')->nullable();
            $table->text('bio')->nullable();
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
            $table->dropColumn('age');
            $table->dropColumn('dob');
            $table->dropColumn('marital_status');
            $table->dropColumn('height');
            $table->dropColumn('blood_group');
            $table->dropColumn('highest_qualification');
            $table->dropColumn('college_attended');
            $table->dropColumn('working_for');
            $table->dropColumn('working_as');
            $table->dropColumn('annual_income');
            $table->dropColumn('father_name');
            $table->dropColumn('mother_name');
            $table->dropColumn('no_of_brothers');
            $table->dropColumn('no_of_sisters');
            $table->dropColumn('native_place');
            $table->dropColumn('father_occupation');
            $table->dropColumn('mother_tongue');
            $table->dropColumn('tob');
            $table->dropColumn('cob');
            $table->dropColumn('subcaste');
            $table->dropColumn('gotra');
            $table->dropColumn('manglik');
            $table->dropColumn('sun_sign');
            $table->dropColumn('mobile_no');
            $table->dropColumn('gender');
            $table->dropColumn('bio');
        });
    }
}
