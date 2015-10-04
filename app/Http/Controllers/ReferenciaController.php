<?php

namespace App\Http\Controllers;
use Log;
use Request;
use App\Referencia;
use App\Http\Controllers\Controller;

class ReferenciaController extends Controller{
	public function store() {
		$referencia = new Referencia();
		$referencia->nombres = Request::input('nombres');
		$referencia->apellidos = Request::input('apellidos');
		$referencia->parentesco = Request::input('parentesco');
		$referencia->anios_conocimiento = Request::input('anios_conocimientos');
		$referencia->fecha_nacimiento = Request::input('fecha_nacimiento');
		$referencia->ife_link = 'la mama de Julio';
		$referencia->telefono = Request::input('telefono');
		$referencia->email = Request::input('email');
		if($referencia->save()) {
		      // do positive action
		}
		else {
		      // return error
		}
	}
	public function update($referencia_id) {
		$referencia = Referencia::find($referencia_id);
		$referencia->nombres = Request::input('nombres');
		$referencia->apellidos = Request::input('apellidos');
		$referencia->parentesco = Request::input('parentesco');
		$referencia->anios_conocimiento = Request::input('anios_conocimientos');
		$referencia->fecha_nacimiento = Request::input('fecha_nacimiento');
		$referencia->ife_link = 'la mama de Julio';
		$referencia->telefono = Request::input('telefono');
		$referencia->email = Request::input('email');
		if($referencia->save()) {
		      // do positive action
		}
		else {
		      // return error
		}
	}
	
	
	public function show ($referencia_id){
		return view('referencia.show', ['referencia' => Referencia::findOrFail($referencia_id)]);
	}
	
}