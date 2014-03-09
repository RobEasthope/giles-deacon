<?php

use Illuminate\Database\Migrations\Migration;

class CreateSmUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sm_users', function($table){
			$table->increments('id');
			$table->string('email')->nullable();
			$table->string('password')->nullable();
			$table->string('access')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sm_users');
	}

}