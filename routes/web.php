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

<<<<<<< HEAD
Route::get('/', ['uses' => 'ProductController@index', 'as' => 'product.index']);
=======
Route::resource('boutique', 'ProductController');
>>>>>>> 1b3b7caa8a10041b729d8148e84e786aed5f8132

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
Route::post('/deleteProposition', 'PropositionController@delete')->name('deleteProposition');

Route::post('/download', 'PropositionController@delete')->name('download');
Route::get('/download','download@getDownload');

Route::post('creernouvEvenement', 'creerEvenement@donnerData')->name('creernouvEvenement');
Route::post('finaliserEvenement', 'creerEvenement@creer')->name('finaliserEvenement');

Route::post('upload', 'upload@upload')->name('upload');

// ----------------------------- //
// Routes de mot de passe oublié //
// ----------------------------- //

Route::get('/mentionsLegales', ['uses' => 'HomeController@getMentions', 'as' => 'mentionsLegales']);

Route::get('/cgv', ['uses' => 'HomeController@getConditions', 'as' => 'cgv']);