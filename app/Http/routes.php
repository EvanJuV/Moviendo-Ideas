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
  return View::make('index');
});
Route::get('/new_user', function () {
  return View::make('usuario.new');
});
Route::post('/userform', 'UsuarioController@newUsuario');

Route::get('auth/login', 'Auth\AuthController@getLogin');

Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/login/fb', 'Auth\AuthController@facebookAuth');

Route::get('/auth/login/fb/redirect', 'Auth\AuthController@facebookCallback');

Route::get('usuario/{usuario_id}', 'UsuarioController@show');
