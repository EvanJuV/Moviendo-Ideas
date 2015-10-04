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
  	return View::make('usuario.edit');
  }]);
  Route::get('{usuario_id}', 'UsuarioController@show');
});

Route::group(['prefix' => 'proyecto'], function() {
	Route::get('index', 'ProyectoController@index');
	Route::post('create', array('uses' => 'ProyectoController@store'));
	Route::get('new', function() {
		return View::make('proyecto.new');
	});
  Route::post('new', 'ProyectoController@store');
	Route::get('update', function() {
		return View::make('proyecto.edit');
	});
	Route::get('{proyecto_id}', 'ProyectoController@show');
});

Route::post('/userform', 'UsuarioController@newUsuario');

Route::get('/auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);

Route::post('/auth/login', 'Auth\AuthController@postLogin');

Route::get('/auth/logout', 'Auth\AuthController@getLogout');

Route::get('/auth/login/fb', 'Auth\AuthController@facebookAuth');

Route::get('/auth/login/fb/redirect', 'Auth\AuthController@facebookCallback');
