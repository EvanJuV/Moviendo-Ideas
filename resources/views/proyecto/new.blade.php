@extends('layout')
@section('new_project')
<div class="container">
	<div class="row">
		<form class="col s12">

			<div class="row">
				<div class="input-field col s10 offset-s1">
					<input id="NombreProyecto" type="text" class="validate">
					<label for="NombreProyecto">Nombre del Proyecto:</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s10 offset-s1">
					<input id="NombreProyecto" type="text" class="validate">
					<label for="NombreProyecto">Nombre del Proyecto:</label>
				</div>
			</div>

			<div class="row">
			    <div class="input-field col s12">
			        <textarea id="textarea1" class="materialize-textarea"></textarea>
			        <label for="textarea1">Descripción</label>
			    </div>
			</div>
			
		</form>
	</div>
</div>

@stop