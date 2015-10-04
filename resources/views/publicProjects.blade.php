<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 	<title>Registro</title>
</head>

<body>
	<nav>
    	<div class="nav-wrapper">
           	<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
           	<ul class="right hide-on-med-and-down">
             	<li><a href=".php">Perfil</a></li>
             	<li><a href="#">Proyectos públicos</a></li>
				<li><a href="myProjects.blade.php">Mis proyectos</a></li>
           	</ul>
           	<ul class="side-nav" id="mobile-demo">
             	<li><a href=".php">Perfil</a></li>
             	<li><a href="#">Proyectos públicos</a></li>
				<li><a href="myProjects.blade.php">Mis proyectos</a></li>
           	</ul>
     	</div>
 	</nav>
	<br>
	<div class = "row">
		<div class = "col s3"><a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a></div>
	</div>
	
	
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
              <p>No nos agrada el proyecto de la izquierda</p>
            </div>
            <div class="card-action">
              <a href="#">Mas....</a>
            </div>
          </div>
        </div>
      </div>
	  </div>


	<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    <script type="text/javascript">$( document ).ready(function(){ $(".button-collapse").sideNav();})</script>
</body>


</html>
