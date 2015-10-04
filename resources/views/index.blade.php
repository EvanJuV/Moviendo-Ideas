@extends('layout')
@section('content')
<div class="slider fullscreen">
  <ul class="slides">
    <li>
      <img src="http://media.npr.org/assets/img/2014/07/16/fist-bump_slide-718aa77b75517785341704b768210c090af22a24-s800-c85.jpg"> <!-- random image -->
      <div class="caption center-align">
        <h3>MOVIENDO IDEAS</h3>
        <h5 class="light grey-text text-lighten-3">Creando conexiones fuertes</h5>
      </div>
    </li>
    <li>
      <img src="http://markmanson.net/wp-content/uploads/2013/03/entrepreneur.jpg"> <!-- random image -->
      <div class="caption left-align">
        <span style="color: white;text-shadow:  -1px -1px 0 #000,1px -1px 0 #000,-1px 1px 0 #000,1px 1px 0 #000;">
          <h3>MOVIENDO IDEAS</h3>
          <h5 class="light grey-text text-lighten-3">Uniendo a personas en todo México y el mundo</h5>
        </span>
      </div>
    </li>
    <li>
      <img src="http://www.venturesden.com/wp-content/uploads/2015/03/entrepreneurship-2.jpg"> <!-- random image -->
      <div class="caption right-align">
        <span style="color: white;text-shadow:  -1px -1px 0 #000,1px -1px 0 #000,-1px 1px 0 #000,1px 1px 0 #000;">
          <h3>MOVIENDO IDEAS</h3>
          <h5 class="light grey-text text-lighten-3">Preparando a las personas para la grandeza</h5>
        </span>
      </div>
    </li>
    <li>
      <img src="http://images.huffingtonpost.com/2015-01-20-IdeasMakeorBreakYourBusiness.jpg"> <!-- random image -->
      <div class="caption center-align">
        <span style="color: white;text-shadow:  -1px -1px 0 #000,1px -1px 0 #000,-1px 1px 0 #000,1px 1px 0 #000;">
          <h3>Moviendo ideas!</h3>
          <h5 class="light grey-text text-lighten-3">Encontrando la grandeza una idea a la vez</h5>
        </span>
      </div>
    </li>
  </ul>
  <div class="bot-buttons" style="z-index:99; position:absolute; top: 75%; left:0; right:0;margin:0 auto; text-align:center">
    <a class="waves-effect waves-teal btn-large blue lighten-2" href="{{ URL::route('login')}}">Inicia sesion</a>
  </div>
</div>
@stop
