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
      <nav>
         <div class="nav-wrapper">
           <a href="{{ URL::route('home') }}" class="brand-logo">Moviendo Ideas</a>
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
      @yield('content')


	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
  <script src="/resources/assets/js/script.js"></script>
	<script type="text/javascript">
    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 15 // Creates a dropdown of 15 years to control year
    });
    $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
    $( document ).ready(function(){ $(".button-collapse").sideNav();})
    $( document ).ready(function(){ 
      $(".button-collapse").sideNav();
      
      var max_fields      = 10; //maximum input boxes allowed
      var wrapper         = $(".last"); //Fields wrapper
      var add_button      = $(".add_field_button"); //Add button ID
          
      var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
          e.preventDefault();
          if(x < max_fields){ //max input box allowed
                  x++; //text box increment
                  $(wrapper).append('<div class="row last"><div class="input-field col s10 offset-s1"><input type="text" name="mytext[]" class="validate"/><a href="#" class="remove_field">Remover</a></div></div>'); //add input box
                  $(wrapper).removeClass('.last');
          }
      });
          
      $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
          e.preventDefault(); $(this).parent('div').remove(); x--;
      })
    });
  </script>
</body>
</html>