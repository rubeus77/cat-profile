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
	// return "Wszystkie koty."; - stworzenie przekierowania do "/cats"
	return Redirect::to('cats');
});

Route::get('cats', function(){
	return "wszystkie koty";
});

Route::get('cats/{id}', function($id)
{
	return "Kot #$id";
})->where('id','[1-9]+');
//wywołanie widoku zawartego w pliku "app/views/about.php"
Route::get('about', function(){
	return View::make('about')->with('number_of_cats', 9000);
});