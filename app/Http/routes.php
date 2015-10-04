<?php

use SocialNorm\Exceptions\ApplicationRejectedException;
use SocialNorm\Exceptions\InvalidAuthorizationCodeException;

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
  return view('welcome');
});

Route::get('/users', function () {
  return view('formtest');
});

Route::post('/userform', 'UsuarioController@newUsuario');

Route::get('/login/fb', function() {
  try {
    SocialAuth::login('facebook');
  } catch (ApplicationRejectedException $e) {
    //El usuario dijo que no
  } catch (InvalidAuthorizationCodeException $e) {
    //Se intento autentificar con un codigo invalido
  }

  return redirect()->intended('/dash');
});

Route::get('/login', 'Auth\AuthController@loginGet');

Route::post('/login', 'Auth\AuthController@loginPost');
