<?php

use Illuminate\Database\Migrations\Migration;

class CreateCouture extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('couture', function($table){
			$table->increments('id');
			$table->string('title')->nullable();
			$table->string('image')->nullable();
			$table->text('sell')->nullable();
			$table->string('description')->nullable();
			$table->string('collection_title')->nullable();
			$table->integer('sort')->nullable();
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
		Schema::drop('couture');
	}

}