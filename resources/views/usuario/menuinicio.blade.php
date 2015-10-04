@extends('layout')
@section('menu')
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
@stop