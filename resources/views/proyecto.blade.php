<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>PRoyecto</title>
</head>

<body>
	<!-- Menu de navegación responsiva-->
    <nav>
    	<div class="nav-wrapper">
			<a href="#!" class="brand-logo">Moviendo Ideas</a>
           	<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
           	<ul class="right hide-on-med-and-down">
             	<li><a href="perfil.blade.php">Perfil</a></li>
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
    <br>
    <br>
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
</body>
</html>
