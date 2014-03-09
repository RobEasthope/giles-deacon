<?php

use Illuminate\Database\Migrations\Migration;

class CreateCollections extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('collections', function($table){
			$table->increments('id');
			$table->string('title')->nullable();
			$table->string('short_title')->nullable();
			$table->string('thumb')->nullable();
			$table->string('banner')->nullable();
			$table->string('video')->nullable();
			$table->boolean('in_collection')->nullable();
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
		Schema::drop('collections');
	}

}