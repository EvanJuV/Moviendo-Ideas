@extends('layout')
@section('content')
    <br />
    <br />
		<form action="/auth/login" method="post">
			{!! csrf_field() !!}
			<div class="row">
				<div class="col m6 offset-m3 s12 grid-example"><label for="Email">Correo electr&oacute;nico: </label></div>
				<br>
				<div class="col m6 offset-m3 s12 grid-example"><input id="Email" type="text" class="validate" name="email"></div>
				<br>
				<div class="col m6 offset-m3 s12 grid-example"><label for="Pass">Password: </label></div>
				<br>
				<div class="col m6 offset-m3 s12 grid-example"><input id="Pass" type="password" class="validate" name="password"></div>
				<br>
				<br>
			</div>
			<div class="row">
				<div class="col m5 offset-m5 s12">
					<button class="waves-effect waves-light btn" action="submit">Ingresar</button>
					<a class="waves-effect waves-light btn" href="/auth/login/fb">Facebook</a>
				</div>
			</div>
		</form>

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    <script type="text/javascript">$( document ).ready(function(){ $(".button-collapse").sideNav();})</script>
@stop
