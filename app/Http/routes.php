<?php

/*...*/

Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'Product'
  ]);