<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('users', function($newTable){
			$newTable -> increments('id');
			$newTable -> string('email')->unique();
			$newTable -> string('username', 100)->unique();
			$newTable -> string('password', 100);
			$newTable -> rememberToken();
			$newTable -> timestamps();
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
		Schema::drop('users');
	}

}
