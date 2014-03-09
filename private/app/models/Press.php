<?php

class Press extends Eloquent {

	protected $table = 'press';

	public static function getAll($take, $skip){

		 return Press::wherePublished(1)->orderBy('date')->take($take)->skip($skip)->get(array('id', 'title', 'thumb'));
	}

	public static function getArticle($id){

		$data = Press::wherePublished(1)->find($id, array('title', 'sell', 'article', 'gallery', 'date'));
		
		$data->gallery = json_decode($data->gallery, true);
		$data->date = date("F Y", strtotime($data->date));

		return $data;
	}


}