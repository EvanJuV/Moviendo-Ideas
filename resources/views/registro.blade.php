<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Registro</title>
</head>
<body>
	
	<!-- Menu de navegación responsiva-->
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

       <br/>
       <br/>
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
                    <div class="input-field col s10 offset-s1">
                      <input id="IFE" type="text" class="validate">
                      <label for="IFE">IFE:</label>
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
      </div>


	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
	<script type="text/javascript">$( document ).ready(function(){ $(".button-collapse").sideNav();})</script>
</body>
</html>