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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/','FrontController@index')->name('index');


Route::get('/restaurantes', 'HomeController@index')->name('restaurantes');

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

    Route::resource('config','ConfigController');

    Route::resource('categorias','CategoriasController');

    Route::resource('admin','AdminController');

    Route::resource('usuarios', 'UsuariosController');


});
Auth::routes();

Route::resource('home','FrontController');




Route::resource('layouts', 'MapaController');