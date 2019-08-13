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

Route::get('/', 'CapsulasController@index');
Route::get('/index','CapsulasController@index');

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/sl', function(){
  Artisan::call('storage:link');
});

Route::get('/correrMigracion', function(){
  Artisan::call('migrate:fresh --seed');
});

Route::get('/products/categories', function () {
    return view('categories');
});

Route::get('/capsulesSearch', 'CapsulasController@search');

Route::get('/capsulesSearch/{id}', 'CapsulasController@show');

Route::post('/cart/addcapsule', 'CartController@addCapsule');

Route::get('/products/{category}', 'productsController@directory');

Auth::routes();

Route::get('/profile', 'profileController@index');

Route::get('/logout', 'LogoutController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
  'middleware' => ['auth','role:admin']
], function () {
  Route::get('/panelAdmin', 'productsController@index');


  Route::get('/agregarCapsula', function(){
    return view ('admin/agregarCapsula');
  });
  Route::get('/agregarMaquina', 'MaquinasController@create');
  Route::get('/agregarCapsula', 'CapsulasController@create');

  Route::post('/agregarCapsula', 'CapsulasController@store');
  Route::post('/agregarMaquina', 'MaquinasController@store');

  Route::post('/borrarMaquina', 'MaquinasController@destroy');
  Route::post('/borrarCapsula', 'CapsulasController@destroy');

  Route::get('/editarMaquina/{id}','MaquinasController@edit');
  Route::get('/editarCapsula/{id}','CapsulasController@edit');

  Route::post('/editarMaquina/{id}','MaquinasController@update');
  Route::post('/editarCapsula/{id}','CapsulasController@update');

});

Route::get('/notAdmin', function () {
    return view('admin/notAdmin');
});
