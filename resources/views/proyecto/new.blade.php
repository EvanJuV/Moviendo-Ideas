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
			        <textarea id="textarea1" class="materialize-textarea validate"></textarea>
			        <label for="textarea1">Descripción</label>
			    </div>
			</div>

			<div class="row">
				<div class="input-field col s10 offset-s1">
					<input id="NumeroInversionistas" type="text" class="validate">
					<label for="NumeroInversionistas">Numero de Inversionistas:</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s10 offset-s1">
				    <button class="add_field_button btn">Añadir colaborador</button>
				    <div><input type="text" name="mytext[]" class="validate"></div>
				</div>
			</div>	

			<div class="row">
				<div class="col s2 offset-s5">
					<button type="submit">Crear</button>
				</div>
			</div>
			
		</form>
	</div>
</div>

@stop