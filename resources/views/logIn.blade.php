<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Entrar</title>
</head>

<body>
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
    <br />
    <br />
	
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

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    <script type="text/javascript">$( document ).ready(function(){ $(".button-collapse").sideNav();})</script>
</body>
</html>
