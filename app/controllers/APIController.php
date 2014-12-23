<?php

/**
* RESTful class that return JSON String
*/
class APIController extends BaseController
{
	
	public function vendors()
	{
		// Eloquent
		$vendor_objs = Vendor::active();

		$vendors = array();
		foreach ($vendor_objs as $key => $vendor) {
			//debug($vendor['name']);
			$vendors[] = array(
				'id' => $vendor['id'], 
				'name' => ucfirst(strtolower($vendor['name']))
				);
		}

		return Response::json($vendors);
	}

	public function buyers()
	{
		// Eloquent
		$buyer_objs = Buyer::active();

		$buyers = array();
		foreach ($buyer_objs as $key => $buyer) {
			$buyers[] = array(
				'id' => $buyer['id'], 
				'name' => ucfirst(strtolower($buyer['name']))
				);
		}

		return Response::json($buyers);
	}
}

