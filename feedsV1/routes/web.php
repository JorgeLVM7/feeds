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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/respuesta', function () {
    return view('response');
});
Route::get('activacion/{code}', 'UserController@activate');
Route::post('complete/{id}', 'UserController@complete');

Route::resource('products', 'ProductsController');


Route::group(['middleware'=>'auth'],function() {
    Route::resource('restaurantes','RestauranteController');

    Route::resource('promocion','PromocionController');

    Route::resource('evento','EventoController');
    });


Route::resource('layouts', 'MapaController');