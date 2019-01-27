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


Auth::routes();

Route::get('/', function () {
  return view('home');
});

Route::get('connexion', function () {
 
  return view('connexion');
});
 
Route::get('boutique', function () {
 
  return view('boutique');
});

Route::get('evenements', function () {
 
  return view('evenements');
});




Route::get('/home', 'HomeController@index')->name('home');

 

//Route::post('/inscription','auth\RegisterController@create');

// Route::match(['get', 'post'], 'register', function(){
 //  return redirect('/');
// }); 





