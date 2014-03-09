<?php

class User extends Eloquent {

	protected $output = array('success'=>0, 'message'=>'There was an error, please try again.');
	protected $fillable = array('name', 'email', 'newsletter');


	public function postUser()
	{
		$input = Input::All();

		$rules = array('name' => 'required', 'email' => 'required|unique:users,email|email');

		$validator = Validator::make($input, $rules);
		
		if($validator->fails())
		{
			$this->output['message'] = $validator->messages()->toArray();
		}
		else
		{
			$user = User::create(array('name' => $input['name'], 'email' => $input['email'], 'newsletter'=> 1));

			$this->output['success'] = 1;
			$this->output['message'] = 'Thank you for signing up.';
		}

		return $this->output;
	}

}