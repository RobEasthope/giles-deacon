<?php

class ReadyToWearPageController extends BaseController {

	public function showIndex()
	{
		return View::make('readytowear');
	}

}