<?php

class StudioSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('studio')->delete();

		DB::table('studio')->insert(array(
            array(
                'title' => 'Giles Shoots AW 2013 for Vogue',
                'sell' => 'Giles Shoots AW 2013 for Vogue Sell',
               	'article'  => 'Giles Shoots AW 2013 for Vogue Article',
               	'thumb'  => 'thumb.jpg',
               	'gallery'  => '{"0":{"img":"\/assets\/img\/dummy-content\/studio_thumbs\/1.jpg","caption":"img one"},"1":{"img":"\/assets\/img\/dummy-content\/studio_thumbs\/1.jpg","caption":"img two"},"2":{"img":"\/assets\/img\/dummy-content\/studio_thumbs\/3.jpg","caption":"img three"}}',
               	'date'  => '2014-01-01 00:00:00',
               	'published'  => 1
            ),
            array(
                'title' => 'Giles Wins an Award',
                'sell' => 'Giles Wins an Award Sell',
               	'article'  => 'Giles Wins an Award Article',
               	'thumb'  => 'thumb2.jpg',
               	'gallery'  => '{"0":{"img":"\/assets\/img\/dummy-content\/studio_thumbs\/1.jpg","caption":"img one"},"1":{"img":"\/assets\/img\/dummy-content\/studio_thumbs\/1.jpg","caption":"img two"},"2":{"img":"\/assets\/img\/dummy-content\/studio_thumbs\/3.jpg","caption":"img three"}}',
               	'date'  => '2014-01-02 00:00:00',
               	'published'  => 1
            )
       	));

	}

}