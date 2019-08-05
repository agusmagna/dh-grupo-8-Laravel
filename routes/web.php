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

Route::get('/products', function () {
    return view('products');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/agregarCapsula', function(){
  return view ('productos.agregarCapsula');
});
Route::post('/agregarCapsula', 'CapsulasController@create');

Route::get('/agregarMaquina', function(){
  return view ('productos.agregarMaquina');
});
Route::post('/agregarMaquina', 'MaquinasController@create');

Route::get('/panelAdmin', 'CapsulasController@index');
