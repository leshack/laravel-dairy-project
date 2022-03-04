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
     * whatever is here, is executed when we run the migration
     */
    public function up()
    {
        //create table
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id')->unsigned();
            $table->integer('national_id');
            $table->string('name',200);
            $table->string('email',200)->unique();
            $table->text('password');
            $table->string('phone',12);
            $table->date('birth_date');
            $table->integer('role_id')->unsigned();
            //created_at,updated_at
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     * this will be run
     */
    public function down()
    {
        //drop that table
        Schema::dropIfExists('users');
    }
}
