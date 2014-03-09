<?php

class Collections extends Eloquent {

	protected $table = 'collections';

	public static function getAll(){

		 return Couture::wherePublished(1)->orderBy('sort')->get(array('id', 'short_title', 'thumb', 'banner', 'video'));
	}

	public static function getLook(){

		 return Couture::find($id, array('title', 'image', 'sell', 'description', 'collection_title'));
	}

}