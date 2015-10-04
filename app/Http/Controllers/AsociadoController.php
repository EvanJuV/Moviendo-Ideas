<?php

namespace App\Http\Controllers;

use App\Asociado;
use Request;
use App\Http\Controllers\Controller;

class AsociadoController extends Controller {
	public function index($proyecto_id) {
		$asociados = Asociado::where('proyecto_id', $proyecto_id);

		return view('asociado.index', ['asociados' => $asociados]);
	}

	public function store() {
		
	}
}
