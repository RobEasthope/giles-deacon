<?php
class GatewayController extends BaseController {

	public function postUser()
	{
		if (Request::ajax())
		{
			$mUser = new User();
			return $mUser->postUser();
		}
	}

}

