<?php

class Couture extends Eloquent {

	protected $table = 'couture';

	public static function getAll(){

		 return Couture::wherePublished(1)->orderBy('sort')->get(array('id', 'title', 'image'));
	}

	public static function getLook($id){

		return Couture::wherePublished(1)->find($id, array('title', 'image', 'sell', 'description', 'collection_title'));
	}
}