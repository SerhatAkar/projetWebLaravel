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
Route::get('/home', function () {
  $users = DB::table('users')->get();
  return view('home',['data'=> $users]);
});

// --------------------- //
// Routes de la boutique //
// --------------------- //

Route::resource('boutique', 'ProductController');

Route::resource('panier', 'ProductController');

Route::resource('cart', 'ProductController');

Route::get('/add-to-cart/{id}', ['uses' => 'ProductController@getAddToCart', 'as' => 'boutique'])->where('n', '[0-9]+');

Route::get('/shopping-cart', ['uses' => 'ProductController@getCart', 'as' => 'shopCart'])->where('n', '[0-9]');

// --------------------- //
// Routes des évènements //
// --------------------- //

Route::get('evenements', function () {
  $propositions = DB::table('propositions')->get();
  return view('evenements',['propositions'=> $propositions]);
});

Route::get('proposerEvenement', function () {
 
  return view('proposerEvenement');
});

Route::get('modererProposition', function () {
  $propositions = DB::table('propositions')->get();
  return view('modererProposition',['propositions'=> $propositions]);
});

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );


Route::post('/proposerEvenement','PropositionController@store');

// Route::get('acceptProposition', 'PropositionController@accept')->name('acceptProposition');
// Route::get('declineProposition', 'PropositionController@accept');

Route::post('/acceptProposition/{id}', 'PropositionController@accept')->name('acceptProposition');
Route::post('/declineProposition/{id}', 'PropositionController@decline')->name('declineProposition');

//Route::get('/home', 'HomeController@index')->name('home');

 

//Route::post('/inscription','auth\RegisterController@create');

// Route::match(['get', 'post'], 'register', function(){
 //  return redirect('/');
// }); 





