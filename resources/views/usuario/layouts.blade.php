@extends('layouts')}
@section('menuinicio')
<nav>
   <div class="nav-wrapper">
     <a href="#!" class="brand-logo">Moviendo Ideas</a>
     <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
     <ul class="right hide-on-med-and-down">
       <li><a href=".html">Explorar</a></li>
       <li><a href=".html">Sobre Nosotros</a></li>
     </ul>
     <ul class="side-nav" id="mobile-demo">
       <li><a href=".html">Explorar</a></li>
       <li><a href=".html">Sobre Nosotros</a></li>
     </ul>
   </div>
 </nav>
@stop

@section('menuInterno')
      <nav>
         <div class="nav-wrapper">
           <a href="#!" class="brand-logo">Moviendo Ideas</a>
           <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
           <ul class="right hide-on-med-and-down">
             	<li><a href="perfil.php">Perfil</a></li>
             	<li><a href="publicProjects.blade.php">Proyectos públicos</a></li>
				      <li><a href="myProjects.blade.php">Mis proyectos</a></li>
           </ul>
           <ul class="side-nav" id="mobile-demo">
             	<li><a href="perfil.blade.php">Perfil</a></li>
             	<li><a href="publicProjects.blade.php">Proyectos públicos</a></li>
				      <li><a href="myProjects.blade.php">Mis proyectos</a></li>
           </ul>
         </div>
       </nav>
@stop

@section('indexContent')
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
@stop

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

@section('regform')
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
        <div class="input-field col s5 offset-s1">
          <input id="Calle" type="text" class="validate">
          <label for="Calle">Calle:</label>
        </div>
        <div class="input-field col s5">
          <input id="Numero" type="text" class="validate">
          <label for="Numero">Numero:</label>
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

@section('projectContent')
	<div class="container">
		<div class = "row">
			<div class = "col s3"><a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a></div>
		</div>
		<div class="row">
			<div class="col s3 offset-s4">
				<img src="http://sd.keepcalm-o-matic.co.uk/i/keep-calm-and-allahu-akbar-60.png" alt="" class="circle responsive-img">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col s6 offset-s4">
				Proyecto para revivir el 911.
				<br>
				<br>
			</div>
		</div>
		<div class="row">
			<div class="col s6 offset-s3">
				<div class="collection">
					<a href="#!" class="collection-item">Marco Antonio Ragil</a>
        			<a href="#!" class="collection-item">Julo Cesar Cepeda</a>
        			<a href="#!" class="collection-item">Javier 'El loco' Martinez</a>
        			<a href="#!" class="collection-item">Evan 'Pasivo Agresivo'</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col s6 offset-s4">
				<a class="waves-effect waves-light btn">Unirse al equipo</a>
			</div>
		</div>
	</div>
@stop

@section('publicProjects')
	<div class= "container">
	<div class="row">
        <div class="col s5 m5 l5 ">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Proyecto contra la hambruna</span>
              <p>El proyecto está enfocado a terminar con la crisis de la hambruna que ha azotado en los ultimos años, cada vez más al mundo, sobre todo a países bajos. Para la solución de este proyecto propnemos declarar la hambruna como un mito y que todos sigan con sus mendigas vidas.</p>
            </div>
            <div class="card-action">
              <a href="#">Mas....</a>
            </div>
          </div>
        </div>
		<div class="col s5 m5 l5">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Proyecto contra el proyecto contra la hambruna</span>
              <p>No nos agrada el proyecto de la izquierda >.< </p>
            </div>
            <div class="card-action">
              <a href="#">Mas....</a>
            </div>
          </div>
        </div>
      </div>
	  </div>
@stop

