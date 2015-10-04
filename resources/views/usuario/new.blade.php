@extends('layout')
@section('content')
<!--Forma de registro para usuarios nuevos-->
<div class="container">
  <div class="row">
    {!! Form::open(array('url' => 'usuario/create', 'files' => true, 'class' => 'col s12')) !!}
      <div class="row">
        <div class="input-field col s5 offset-s1">
          <input name="nombres" type="text" class="validate">
          <label for="nombres">Nombre:</label>
        </div>
        <div class="input-field col s5">
          <input name="apellidos" type="text" class="validate">
          <label for="apellidos">Apellido:</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s5 offset-s1">
          <input name="estado" type="text" class="validate">
          <label for="estado">Estado:</label>
        </div>
        <div class="input-field col s5">
          <input name="municipio" type="text" class="validate">
          <label for="municipio">Municipio:</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s5 offset-s1">
          <input name="calle" type="text" class="validate">
          <label for="calle">Calle:</label>
        </div>
        <div class="input-field col s5">
          <input name="numero" type="text" class="validate">
          <label for="numero">Numero:</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s5 offset-s1">
          <input name="ife_link" type="text" class="validate">
          <label for="ife_link">IFE:</label>
        </div>
        <div class="input-field col s5">
          <input type="date" class="datepicker" name="fecha_nacimiento">
          <label for="fecha_nacimiento">Fecha de nacimiento:</label>
        </div> 
      </div>

      <div class="row">
        <div class="input-field col s5 offset-s1">
          <input name="email" type="text" class="validate">
          <label for="email">Correo:</label>
        </div>
        <div class="input-field col s5">
          <input name="password" type="password" class="validate">
          <label for="password">Contraseña:</label>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col s3 offset-s5">
        <button type="submit" class="waves-effect waves-light btn">Completar</button>
      </div>
    </div>
  {!! Form::close() !!}
</div>
@stop