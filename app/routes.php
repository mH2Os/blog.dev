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

Route::get('/hello/{name}/{day}', function($name, $day) {
	return "Hello $name! Its $day.";
});

Route::get('/rolldice/{guess}', function($guess) {
	// generate a random number
	// pass random number & guess to the view
	$random = rand(1, 6);
	return View::make('roll-dice')->with("guess", $guess)->with("random", $random);
});

Route::get('/', 'HomeController@showWelcome');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::resource('posts', 'PostsController');

Route::get('/', function()
{
    return View::make('hello');
})->before('auth.basic');

