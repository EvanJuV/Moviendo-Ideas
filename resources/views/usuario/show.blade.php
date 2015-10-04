@extends('layout')
@section('content')
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
          <label class="active" for="first_name2">Correo Electr�nico: </label>
      </div>
    <br>
    <div class="input-field col s6 offset-s3">
          <input value="Algun lugar cerca de mi casa" id="first_name2" type="text" class="validate" disabled>
          <label class="active" for="first_name2">Direcci�n: </label>
      </div>
    <br>
    <div class="input-field col s6 offset-s3">
          <input value="4448484857" id="first_name2" type="text" class="validate" disabled>
          <label class="active" for="first_name2">Numero de tel�fono</label>
      </div>
    <br>
    </div>
  <div class="row">
    <div class="input-field col s6 offset-s9"><a class="waves-effect waves-light btn">Editar</a></div>
  </div>
</div>

@stop
