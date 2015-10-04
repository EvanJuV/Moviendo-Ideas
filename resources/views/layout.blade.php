<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Moviendo Ideas</title>
</head>
<body>
	
	<!-- Menu de navegación responsiva-->
      @yield('menuinicio')

       <br/>
       <br/>
      @yield('content')


	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
	<script type="text/javascript">$( document ).ready(function(){ $(".button-collapse").sideNav();})</script>
</body>
</html>