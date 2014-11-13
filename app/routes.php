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

Route::get('/', function()
{
	return View::make('hello');
});
Route::model('discographies','Discography');
Route::model('events','Event');
Route::model('news','News');
Route::bind('news',function($value,$route){
	return News::whereId($value)->first();
});
Route::bind('events',function($value,$route){
	return Event::whereId($value)->first();
});
Route::bind('discographies',function($value,$route){
	return Discography::whereId($value)->first();
});

Route::resource("discographies", "DiscographiesController");
Route::resource('events','EventsController');
Route::resource("users","UsersController");
Route::resource("news","NewsController");