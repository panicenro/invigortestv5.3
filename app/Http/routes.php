<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //return view('welcome');
    return redirect('products');
});

//Route::get('products', 'ProductsController@index');
//Route::get('products/create', 'ProductsController@create');
//Route::get('products/destroy/{id}', 'ProductsController@destroy');
//Route::get('products/{id}', 'ProductsController@show');
//Route::get('products/{id}/edit', 'ProductsController@edit');
//Route::post('products', 'ProductsController@store');

Route::resource('products', 'ProductsController');
