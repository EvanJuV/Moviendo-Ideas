<!DOCTYPE html>
  <html>
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
             <li><a href=".html">Explorar</a></li>
             <li><a href=".html">Sobre Nosotros</a></li>
           </ul>
           <ul class="side-nav" id="mobile-demo">
             <li><a href=".html">Explorar</a></li>
             <li><a href=".html">Sobre Nosotros</a></li>
           </ul>
         </div>
       </nav>
      <br>
      <br>
      <!-- Contenido -->
      <!-- Imagen de index-->
      <div class="container">
        <div class="row">
          <div class="col s8 offset-s2">
            <img class="responsive-img" src="http://www.ecatepec.com/wp-content/uploads/2014/10/JARDINECATEPEC.jpg">
          </div>
        </div>
        <!-- Botones de registro e inicio de sesion-->
        <div class="row">
          <div class="col s2 offset-s4">
            <a class="waves-effect waves-light btn-large">Registro</a>
          </div>
          <div class="col s2">
            <a class="waves-effect waves-light btn-large">Iniciar</a>
          </div>
        </div>
      </div>


      <!--Footer-->

        
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
      <script type="text/javascript">$( document ).ready(function(){ $(".button-collapse").sideNav();})</script>
    </body>
  </html>