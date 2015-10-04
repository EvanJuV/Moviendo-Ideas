@extends('layout')
@section('perfilContent')
	<div class="container">
		<div class="row">
    		<div class="input-field col s6 offset-s3">
      			<input value="Nombre" id="first_name2" type="text" class="validate" disabled>
      			<label class="active" for="first_name2">Nombre: </label>
   			</div>
			<br>
			<div class="input-field col s6 offset-s3">
      			<input value="Apellido" id="first_name2" type="text" class="validate" disabled>
      			<label class="active" for="first_name2">Apelido: </label>
   			</div>
			<br>
			<div class="input-field col s6 offset-s3">
      			<input value="01/01/00" id="first_name2" type="date" class="datepicker" disabled>
      			<label class="active" for="first_name2">Fecha de Nacimiento: </label>
   			</div>
			<br>
			<div class="input-field col s6 offset-s3">
      			<input value="e-mail" id="first_name2" type="text" class="validate" disabled>
      			<label class="active" for="first_name2">Correo Electrónico: </label>
   			</div>
			<br>
			<div class="input-field col s6 offset-s3">
      			<input value="Algun lugar cerca de mi casa" id="first_name2" type="text" class="validate" disabled>
      			<label class="active" for="first_name2">Dirección: </label>
   			</div>
			<br>
			<div class="input-field col s6 offset-s3">
      			<input value="4448484857" id="first_name2" type="text" class="validate" disabled>
      			<label class="active" for="first_name2">Numero de teléfono</label>
   			</div>
			<br>
  		</div>
		<div class="row">
			<div class="input-field col s6 offset-s9"><a class="waves-effect waves-light btn">Editar</a></div>
		</div>
	
	
	</div>
@stop