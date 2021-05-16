<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('password');
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
            $table->string('profile_for')->nullable();
            $table->string('living_with_family')->nullable();
            $table->string('city')->nullable();
            $table->string('image')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
