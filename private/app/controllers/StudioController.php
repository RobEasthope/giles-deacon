<?php

class StudioController extends BaseController {

	public function getIndex()
	{
		return View::make('studio')
			->with('data', Studio::getAll(10, 0));
	}

	public function getArticle($id){

		return View::make('long-article')
			->with('data', Studio::getArticle($id));
	}

	public function getAboutGiles(){

		return View::make('about-giles');
	}

}