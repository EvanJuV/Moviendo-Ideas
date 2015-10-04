<?php

namespace App\Http\Controllers;

use DB;
use Log;
use Request;
use App\Usuario;
use App\Http\Controllers\Controller;

class UsuarioController extends Controller {
  public function store() {
    $usuario = new Usuario();

    $usuario->nombres = Request::input('nombres');
    $usuario->apellidos = Request::input('apellidos');
    $usuario->fecha_nacimiento = Request::input('fecha_nacimiento');
    $usuario->estado = Request::input('estado');
    $usuario->municipio = Request::input('municipio');
    $usuario->calle = Request::input('calle');
    $usuario->numero = Request::input('numero');
    $usuario->cp = Request::input('cp');
    $usuario->ife_link = 'la mama de Julio';
    $usuario->tags = Request::input('tags');
    $usuario->email = Request::input('email');
    $usuario->password = Request::input('password');

    if($usuario->save()) {
      // do positive action
    }
    else {
      // return error
    }
  }

  public function update($usuario_id, Request $request) {
    $usuario = Usuario::find($usuario_id);

    $usuario->nombres = Request::input('nombres');
    $usuario->apellidos = Request::input('apellidos');
    $usuario->fecha_nacimiento = Request::input('fecha_nacimiento');
    $usuario->estado = Request::input('estado');
    $usuario->municipio = Request::input('municipio');
    $usuario->calle = Request::input('calle');
    $usuario->numero = Request::input('numero');
    $usuario->cp = Request::input('cp');
    $usuario->ife_link = 'la mama de Julio';
    $usuario->tags = Request::input('tags');
    $usuario->email = Request::input('email');

    if($usuario->save()) {
      // do positive action
    }
    else {
      // return error
    }
  }

  public function show($usuario_id) {
    return view('usuario.show', ['usuario' => Usuario::findOrFail($usuario_id)]);
  }
}

?>
