<?php

Route::model('cat', 'Cat');

View::composer('cats.edit', function($view)
{
  $breeds = Breed::all();
  $breed_options = array_combine($breeds->lists('id'), $breeds->lists('name'));
  $view->with('breed_options', $breed_options);
});

Route::get('/', function() {
  return Redirect::to("cats");
});

Route::get('about', function(){
  $catsNumber= Cat::all(); //all() zwraca jako tablica obiektów wszystkie elementy tabeli "cats"
  $numberOfCats=count($catsNumber); //count() - wylicza ilość elementów tablicy $catsNumber. Można skrócić i zapisać count() zamiast all() w lini powyżej
  return View::make('about')->with('number_of_cats', $numberOfCats);
  //zamiast "9000" może być dowolny tekst lub liczba lub cokolwiek
});


Route::get('cats', function(){
  $cats = Cat::all();
  return View::make('cats/index')
    ->with('cats', $cats);
});

Route::get('cats/breeds/{name}', function($name){
  $breed = Breed::whereName($name)->with('cats')->first();
  return View::make('cats/index')
    ->with('breed', $breed)
    ->with('cats', $breed->cats);
});

Route::get('cats/create', function() {
  $cat = new Cat;
  return View::make('cats.edit')
    ->with('cat', $cat)
    ->with('method', 'post');
});

Route::post('cats', function(){
  $cat = Cat::create(Input::all());
  return Redirect::to('cats/' . $cat->id)
    ->with('message', 'Profil został utworzony!');
});

Route::get('cats/{id}', function($id) {
  $cat = Cat::find($id);
  return View::make('cats.single')
    ->with('cat', $cat);
});


Route::get('cats/{cat}/edit', function(Cat $cat) {
  return View::make('cats.edit')
    ->with('cat', $cat)
    ->with('method', 'put');
});

Route::get('cats/{cat}/delete', function(Cat $cat) {
  return View::make('cats.edit')
    ->with('cat', $cat)
    ->with('method', 'delete');
});

Route::put('cats/{cat}', function(Cat $cat) {
  $cat->update(Input::all());
  return Redirect::to('cats/' . $cat->id)
    ->with('message', 'Profil został uaktualniony!');
});

Route::delete('cats/{cat}', function(Cat $cat) {
  $cat->delete();
  return Redirect::to('cats')
    ->with('message', 'Profil został usunięty!');
});

