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

Route::get('/', ['as' => 'home', function () {
  return View::make('index');
}]);

Route::group(['prefix' => 'usuario'], function () {
  Route::post('create', array('uses' => 'UsuarioController@store'));
  Route::get('new', ['as' => 'new_usuario', function() {
	  return View::make('usuario.new');
  }]);
  Route::get('update', ['as' => 'update_usuario', function() {
  	return View::make('usuario.update');
  }]);
  Route::get('{usuario_id}', 'UsuarioController@show');
});
