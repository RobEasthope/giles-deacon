<?php

class CoutureController extends BaseController {

	public function getIndex()
	{
		return View::make('couture')
			->with('data', Couture::getAll());
	}

}