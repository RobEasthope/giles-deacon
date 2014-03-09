<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//$this->call('CollectionsSeeder');
		$this->call('CoutureSeeder');
		$this->call('PressSeeder');
		$this->call('StudioSeeder');
		//$this->call('UsersSeeder');
	}

}