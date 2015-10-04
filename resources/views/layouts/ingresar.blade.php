@extends('layout')
@section('logIn')
<div class="row">
	<div class="col s6 offset-s3 grid-example"><label for="Email">Correo electr&oacute;nico: </label></div>
	<br>
	<div class="col s6 offset-s3 grid-example"><input id="Email" type="text" class="validate"></div>
	<br>
	<div class="col s6 offset-s3 grid-example"><label for="Pass">Password: </label></div>
	<br>
	<div class="col s6 offset-s3 grid-example"><input id="Pass" type="password" class="validate"></div>
	<br>
	<br>
</div>
<div class="row">
	<div class="col s5 offset-s5 grid example">
		<a class="waves-effect waves-light btn">Ingresar</a>
	</div>
</div>
@stop