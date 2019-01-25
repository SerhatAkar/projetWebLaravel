<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('connexion', function () {
 
  return view('connexion',array('name' => 'Projet Web'));
});

Route::get('boutique', function () {
 
  return view('boutique',array('name' => 'Projet Web'));
});

Route::get('evenements', function () {
 
  return view('evenements',array('name' => 'Projet Web'));
});




Route::get('/home', 'HomeController@index')->name('home');

 Route::get('/inscription', function()
{
  return View::make('inscription');
}); 

Route::post('/inscription','auth\RegisterController@create');

Route::match(['get', 'post'], 'register', function(){
  return redirect('/');
}); 

