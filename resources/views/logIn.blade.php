<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
        	<a href="" class="brand-logo">Moviendo Ideas</a>
          	<ul id="nav-mobile" class="right hide-on-med-and-down">
            	<li><a href="">Explore</a></li>
            	<li><a href="">About Us</a></li>
        	</ul>
    	</div>
    </nav>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
	<div align="center">
		<?php echo Form::label ('EmailLabel','Dirección de eMail: '); ?>
		<?php echo Form::text  ('Email','ejemplo@loquesea.com'); ?>
	</div>
	<br>
	<div align="center">
		<?php echo Form::label ('PassLabel','Contraseña: '); ?>
		<?php echo Form::password ('Pass'); ?>
	</div>
	<br>
	<br>
	<div align="center">
		<?php echo Form::submit ('Enter'); ?>
	</div>
</body>


</html>
