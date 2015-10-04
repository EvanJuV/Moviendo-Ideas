@extends('layout')
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