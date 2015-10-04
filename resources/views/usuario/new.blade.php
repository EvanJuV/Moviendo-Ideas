@extends('layout')
@section('new_user')
<!--Forma de registro para usuarios nuevos-->
<div class="container">
  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s5 offset-s1">
          <input id="Nombres" type="text" class="validate">
          <label for="Nombres">Nombre:</label>
        </div>
        <div class="input-field col s5">
          <input id="Apellidos" type="text" class="validate">
          <label for="Apellidos">Apellido:</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s5 offset-s1">
          <input id="Estado" type="text" class="validate">
          <label for="Estado">Estado:</label>
        </div>
        <div class="input-field col s5">
          <input id="Municipio" type="text" class="validate">
          <label for="Municipio">Municipio:</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4 offset-s1">
          <input id="Calle" type="text" class="validate">
          <label for="Calle">Calle:</label>
        </div>
        <div class="input-field col s3">
          <input id="Numero" type="text" class="validate">
          <label for="Numero">Numero:</label>
        </div>
         <div class="input-field col s3">
          <input id="Codigo" type="text" class="validate">
          <label for="Codigo">Codigo Postal:</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s5 offset-s1">
          <input id="IFE" type="text" class="validate">
          <label for="IFE">IFE:</label>
        </div>
        <div class="input-field col s5">
          <input id="Telefono" type="text" class="validate">
          <label for="Telefono">Teléfono:</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s5 offset-s1">
          <input id="Correo" type="text" class="validate">
          <label for="Correo">Correo:</label>
        </div>
        <div class="input-field col s5">
          <input id="Password" type="text" class="validate">
          <label for="Password">Contraseña:</label>
        </div>
      </div>

    </div>
  </form>
  <div class="row">
    <div class="col s3 offset-s5">
      <a class="waves-effect waves-light btn">Completar</a>
    </div>
  </div>
</div>
@stop