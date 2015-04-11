<?php

class HomeController extends BaseController {

	public function showWelcome()
	{
		$name = "Nidia";

		return View::make('main.index', compact('name'));
	}

}
