<?php

class ArchiveController extends BaseController {

	public function getIndex()
	{
		return View::make('archive');
	}

}