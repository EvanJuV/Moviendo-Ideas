@extends('layout')
@section('content')
<!-- Contenido -->
<!-- Imagen de index-->
<div class="container">
  <div class="row">
    <div class="col s8 offset-s2">
      <img class="responsive-img" src="http://www.ecatepec.com/wp-content/uploads/2014/10/JARDINECATEPEC.jpg">
    </div>
  </div>
  <!-- Botones de registro e inicio de sesion-->
  <div class="row">
    <div class="col s2 offset-s3">
      <a class="waves-effect waves-light btn-large" href="{{ URL::route('new_usuario')}}">Registro</a>
    </div>
    <div class="col s2 offset-s1">
      <a href="" class="waves-effect waves-light btn-large">Iniciar</a>
    </div>
  </div>
</div>
@stop