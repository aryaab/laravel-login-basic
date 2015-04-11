<?php

class AuthController extends BaseController {
	
	public function getLogin()
	{
		return View::make('auth.login');
	}

	public function postLogin()
	{

		$credentials = Input::only('username', 'password');

		if (Auth::attempt($credentials))
		{
			return 'estoy logueado';
		}

		return 'no estoy logueado';
	}

	public function logout()
	{
		Auth::logout();
	}

}