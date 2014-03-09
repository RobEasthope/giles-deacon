<?php

class CoutureSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('couture')->delete();

		DB::table('couture')->insert(array(
            array(
                'title' => 'Look 1',
                'image' => 'look1.jpg',
               	'sell'  => 'Look 1 Sell',
               	'description'  => 'Look 1 Description',
               	'collection_title'  => 'Test Collection',
               	'sort'  => 0,
               	'published'  => 1
            ),
            array(
                'title' => 'Look 2',
                'image' => 'look2.jpg',
               	'sell'  => 'Look 2 Sell',
               	'description'  => 'Look 2 Description',
               	'collection_title'  => 'Red Collection',
               	'sort'  => 1,
               	'published'  => 1
            )
       	));
	}

}