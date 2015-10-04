@extends('layout')
@section('content')
      <!-- Contenido -->
      <!-- Imagen de index-->
      <div class="container">
        <div class="row">
          <div class="col s8 offset-s2 m8 offset-m2 l8 offset-l2">
            <img class="responsive-img" src="http://www.ecatepec.com/wp-content/uploads/2014/10/JARDINECATEPEC.jpg">
          </div>
        </div>
        <!-- Botones de registro e inicio de sesion-->
        <div class="row">
          <div class="col s2 offset-s3 m2 offset-m3 l2 offset-l3">
            <a class="waves-effect waves-light btn-large" href="registro.blade.php">Registro</a>
          </div>
          <div class="col s2 offset-s1 m2 offset-m1 l2 offset-l1">
            <a class="waves-effect waves-light btn-large">Iniciar</a>
          </div>
        </div>
      </div>


      <!--Footer-->

@stop