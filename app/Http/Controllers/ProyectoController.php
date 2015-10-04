<?php

namespace App\Http\Controllers;

use Log;
use Request;
use App\Proyecto;
use App\Http\Controllers\Controller;

class ProyectoController extends Controller {
	public function index() {
		$proyectos = Proyecto::all();

		return view('proyecto.index', ['proyectos' => $proyectos]);
	}

	public function store() {
		$proyecto = new Proyecto();

		$proyecto->titulo = Request::input('titulo');
		$proyecto->descripcion = Request::input('descripcion');
		$proyecto->inversion = Request::input('inversion');
	}

	public function update($proyecto_id) {
		$proyecto = Proyecto::find($proyecto_id);

		$proyecto->titulo = Request::input('titulo');
		$proyecto->descripcion = Request::input('descripcion');
		$proyecto->inversion = Request::input('inversion');
	}

	public function show($proyecto_id) {
    return view('proyecto.show', ['proyecto' => Proyecto::findOrFail($proyecto_id)]);
	}
}
