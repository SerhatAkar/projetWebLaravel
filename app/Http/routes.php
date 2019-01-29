<?php

/*...*/

Route::get('/', [
    'uses' => 'ProductController@index',
    'as' => 'Product'
  ]);

Route::get('/add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'Cart'
  ]);

Route::get('/shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'shopcart'
  ]);