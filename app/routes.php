<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@getIndex');
Route::get('/version', 'HomeController@getVersion');
Route::get('/disclaimer', 'HomeController@getDisclaimer');


// Reference
Route::get('/reference', 'ReferenceController@getIndex');


// RESTful
Route::get('/api/vendors', 'APIController@vendors');
Route::get('/api/buyers', 'APIController@buyers');