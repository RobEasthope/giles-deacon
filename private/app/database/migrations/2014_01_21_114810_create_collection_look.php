<?php

use Illuminate\Database\Migrations\Migration;

class CreateCollectionLook extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('collection_look', function($table){
			$table->increments('id');
			$table->unsignedInteger('collection_id');
			$table->foreign('collection_id')->references('id')->on('collections')->onDelete('cascade')->onUpdate('cascade');
			$table->unsignedInteger('look_id')->unsigned();
			$table->foreign('look_id')->references('id')->on('looks')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('collection_look');
	}

}