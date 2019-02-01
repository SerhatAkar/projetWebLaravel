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

Route::get('/', ['uses' => 'ProductController@index', 'as' => 'product.index']);

Route::get('boutique', ['uses' => 'ProductController@index', 'as' =>'boutique']);

Route::get('/add-to-cart/{id}', ['uses' => 'ProductController@getAddToCart', 'as' => 'cart'])->where('n', '[0-9]+');

Route::get('/remove/{id}', ['uses' => 'ProductController@getRemoveItem', 'as' => 'product.remove']);

Route::get('/shopping-cart', ['uses' => 'ProductController@getCart', 'as' => 'shoppingCart'])->where('n', '[0-9]');

Route::get('/paypalCheckout', ['uses' => 'ProductController@getPaypalCheckout', 'as' => 'checkout']);

Route::post('/paypalCheckout', ['uses' => 'ProductController@postPaypalCheckout', 'as' => 'checkout']);

Route::resource('boutique', 'ProductController');

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

Route::post('/acceptProposition', 'PropositionController@accept')->name('acceptProposition');
Route::post('/declineProposition', 'PropositionController@decline')->name('declineProposition');
Route::post('/deleteProposition', 'PropositionController@delete')->name('deleteProposition');

Route::post('/download', 'PropositionController@delete')->name('download');
Route::get('/download','download@getDownload');

Route::post('creernouvEvenement', 'creerEvenement@donnerData')->name('creernouvEvenement');
Route::post('finaliserEvenement', 'creerEvenement@creer')->name('finaliserEvenement');


Route::post('file-upload', 'upload@fileUploadPost')->name('fileUploadPost');

// ----------------------------- //
// Routes de mot de passe oublié //
// ----------------------------- //

Route::get('/mentionsLegales', ['uses' => 'HomeController@getMentions', 'as' => 'mentionsLegales']);

Route::get('/cgv', ['uses' => 'HomeController@getConditions', 'as' => 'cgv']);


Route::post('/proposerEvenement','PropositionController@store');

Route::post('/acceptProposition', 'PropositionController@accept')->name('acceptProposition');
Route::post('/declineProposition', 'PropositionController@decline')->name('declineProposition');
Route::post('/deleteProposition', 'PropositionController@delete')->name('deleteProposition');


Route::post('/voteUP', 'PropositionController@voteUP')->name('voteUP');
Route::post('/voteDown', 'PropositionController@voteDown')->name('voteDown');



Route::post('/download', 'PropositionController@delete')->name('download');
Route::get('/download','download@getDownload');

Route::post('/creerEvenement', 'creerEvenement@donnerData')->name('creerEvenement');
Route::post('/finaliserEvenement', 'creerEvenement@creer')->name('finaliserEvenement');

Route::post('file-upload', 'upload@fileUploadPost')->name('fileUploadPost');
