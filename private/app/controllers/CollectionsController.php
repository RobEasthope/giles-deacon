<?php

class CollectionsController extends BaseController {

	public function getIndex()
	{
		return View::make('collection');
	}

}