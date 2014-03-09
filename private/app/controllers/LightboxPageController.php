<?php

class LightboxPageController extends BaseController {

	public function showIndex()
	{
		return View::make('lightbox');
	}

}