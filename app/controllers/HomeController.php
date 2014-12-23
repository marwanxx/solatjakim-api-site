<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		$theme = Theme::uses('notebook')->layout('blue');
		$theme->setMenu('home.index');
		
		$params = array();

		return $theme->scope('home.index', $params)->render();
	}

	public function getVersion()
	{
		$theme = Theme::uses('notebook')->layout('blue');
		$theme->setMenu('home.version');
		
		$params = array();

		return $theme->scope('home.version', $params)->render();
	}

	public function getDisclaimer()
	{
		$theme = Theme::uses('notebook')->layout('blue');
		$theme->setMenu('home.disclaimer');
		
		$params = array();

		return $theme->scope('home.disclaimer', $params)->render();
	}

}
