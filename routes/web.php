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
Route::get('/index','productsController@home');

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/products/categories', function () {
    return view('categories');
});

Route::get('/capsulesSearch', 'productsController@searchCapsule');

Route::get('/capsulesSearch/{id}', 'productsController@searchCapsuleById');

Route::post('/cart/addcapsule', 'CartController@addCapsule');

Route::get('/products/{category}', 'productsController@directory');

Auth::routes();

Route::get('/logout', 'LogoutController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/panelAdmin', 'productsController@index');


Route::get('/agregarCapsula', function(){
  return view ('admin/agregarCapsula');
});
Route::get('/agregarMaquina', 'productsController@showMachineForm');
Route::get('/agregarCapsula', 'productsController@showCapsuleForm');

Route::post('/agregarCapsula', 'productsController@create_capsule');
Route::post('/agregarMaquina', 'productsController@create_machine');

Route::post('/borrarMaquina', 'productsController@deleteMachine');
Route::post('/borrarCapsula', 'productsController@deleteCapsule');

Route::get('/editarMaquina/{id}','productsController@editMachine');
Route::get('/editarCapsula/{id}','productsController@editCapsule');
