<?php

class LongArticlePageController extends BaseController {

	public function showIndex()
	{
		return View::make('long-article');
	}

}