@extends('layout')
@section('content')
<form target="/login" method="post">
  {!! csrf_field() !!}
  <input type="text" name="email" value="correo-electronico">
  <input type="password" name="password" value="contraseña">
  <button type="submit" name="login">iniciar sesion</button>
</form>
<a href="/login/fb"><img src="" alt="Facebook Login"></a>
@stop
