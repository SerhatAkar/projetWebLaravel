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
  $users = DB::table('users')->get();
  return view('home',['data'=> $users]);
});


 
Route::get('boutique', function () {
 
  return view('boutique');
});

Route::get('evenements', function () {
 
  return view('evenements');
});

Route::get('proposerEvenement', function () {
 
  return view('proposerEvenement');
});

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

//Route::get('/home', 'HomeController@index')->name('home');

 

//Route::post('/inscription','auth\RegisterController@create');

// Route::match(['get', 'post'], 'register', function(){
 //  return redirect('/');
// }); 





