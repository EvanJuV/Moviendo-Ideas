<?php

namespace App\Http\Controllers;

use DB;
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
		
	}
}
