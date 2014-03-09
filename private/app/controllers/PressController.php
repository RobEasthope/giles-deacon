<?php

class PressController extends BaseController {

	public function getIndex()
	{
		return View::make('press')
			->with('data', Press::getAll(10, 0));
	}

	public function getArticle($id){

		return View::make('long-article')
			->with('data', Press::getArticle($id));
	}

}