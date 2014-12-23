<?php

class ReferenceController extends BaseController {

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
		$theme->setMenu('reference.index');
		
		$params = array();

		return $theme->scope('reference.index', $params)->render();
	}

}
