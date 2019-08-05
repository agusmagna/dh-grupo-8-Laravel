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
Route::get('/index', function () {
    return view('index');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/products/categories', function () {
    return view('categories');
});

Route::get('/products/{category}', 'productsController@directory');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/agregarCapsula', function(){
  return view ('admin/agregarCapsula');
});

Route::post('/agregarCapsula', 'CapsulasController@create');

Route::get('/agregarMaquina', function(){
  return view ('admin/agregarMaquina');
});
Route::post('/agregarMaquina', 'MaquinasController@create');

Route::get('/panelAdmin', 'productsController@index');

Route::post('/agregarCapsula', 'productsController@create');
