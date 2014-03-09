<?php

class Studio extends Eloquent {

	protected $table = 'studio';

	public static function getAll($take, $skip){

		 return Studio::wherePublished(1)->orderBy('date')->take($take)->skip($skip)->get(array('id', 'title', 'thumb'));
	}

	public static function getArticle($id){

		$data = Studio::wherePublished(1)->find($id, array('title', 'sell', 'article', 'gallery', 'date'));
		
		$data->gallery = json_decode($data->gallery, true);
		$data->date = date("F Y", strtotime($data->date));

		return $data;
	}


}