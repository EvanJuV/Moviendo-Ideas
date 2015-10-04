<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Moviendo Ideas</title>
</head>

<body>

	<!-- Menu de navegación responsiva-->
    <nav>
    	<div class="nav-wrapper">
			<a href="#!" class="brand-logo">Moviendo Ideas</a>
           	<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
           	<ul class="right hide-on-med-and-down">
             	<li><a href="#">Perfil</a></li>
             	<li><a href="publicProjects.blade.php">Proyectos públicos</a></li>
				<li><a href="myProjects.blade.php">Mis proyectos</a></li>
           	</ul>
           	<ul class="side-nav" id="mobile-demo">
             	<li><a href="#">Perfil</a></li>
             	<li><a href="publicProjects.blade.php">Proyectos públicos</a></li>
				<li><a href="myProjects.blade.php">Mis proyectos</a></li>
           	</ul>
      	</div>
  	</nav>
    <br>
	<div class = "row">
		<div class = "col s3"><a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a></div>
	</div>
      <br>
	  
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


	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    <script type="text/javascript">$( document ).ready(function(){ $(".button-collapse").sideNav();})</script>
</body>
</html>
