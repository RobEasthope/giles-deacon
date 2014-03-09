<?php

use Illuminate\Database\Migrations\Migration;

class CreatePress extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('press', function($table){
			$table->increments('id');
			$table->string('title')->nullable();
			$table->text('sell')->nullable();
			$table->mediumText('article')->nullable();
			$table->string('thumb')->nullable();
			$table->text('gallery')->nullable();
			$table->datetime('date')->nullable();
			$table->boolean('published')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('press');
	}

}