<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	Schema::create('users', function($table)
	{
        $table->increments('id');
        $table->string('email')->unique();
        $table->string('fullname', 60);
        $table->string('username', 60);
        $table->string('igname', 60);
        $table->timestamps();
        $table->rememberToken();
        $table->string('password', 60);
        $table->tinyInteger('status')->default(1);
	});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
