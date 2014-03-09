<?php

class ShortArticlePageController extends BaseController {

	public function showIndex()
	{
		return View::make('short-article');
	}

}