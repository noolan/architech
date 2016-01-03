<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('{s1?}/{s2?}/{s3?}/{s4?}/{s5?}', function($s1 = '', $s2 = '', $s3 = '', $s4 = '', $s5 = '') {

	$page = Page::findByURI(Request::path())->firstOrFail();
	
	return view('front.main')->withPage($page);
});
