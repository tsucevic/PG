<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users', function(Blueprint $table) {
            $table -> increments('id');
            $table -> string('first_name');
            $table -> string('last_name');
            $table -> string('username') -> unique();
            $table -> string('email') -> unique();
            $table -> string('password');
            $table -> integer('class');
            $table -> string('profile');
            $table -> string('forgot_password_token');
            $table -> enum('privacy', ['yes', 'no']) -> default('yes');
            $table -> longText('description');
            $table -> timestamps();

            $table -> integer('course_id')-> unsigned();
            $table -> foreign('course_id')-> references('id')->on('courses');


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
