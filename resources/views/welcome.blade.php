@extends('layouts.master')

@section('contenido')
<!-- Three columns of text below the carousel -->
<div class='container-fluid'>
  <div class="container marketing">
    <article class="row">
     <section class="col-lg-4">
       <img class="rounded-circle home-imagen" src="img/hogar.jpg" alt="Generic placeholder image" width="140" height="140">
       <h2>Eventos</h2>
       <p>Todas las ultimas novedades de nuestra fundacion, los proximos eventos y lo que fuimos haciendo hasta ahora</p>
       <p><a class="btn btn-secondary" href="/eventos" role="button">Conoce más&raquo;</a></p>
     </section><!-- /.col-lg-4 -->
     <section class="col-lg-4">
       <img class="rounded-circle home-imagen" src="img/preg_frec.jpg" alt="Generic placeholder image" width="140" height="140">
       <h2>Ayudanos</h2>
       <p>Como podes sumarte, donar y todo lo que queres saber de nosotros</p>
       <p><a class="btn btn-secondary" href="/preguntasFrecuentes" role="button">Conoce más&raquo;</a></p>
     </section><!-- /.col-lg-4 -->
     <section class="col-lg-4">
       <img class="rounded-circle home-imagen" src="img/agrade.jpg" alt="Generic placeholder image" width="140" height="140">
       <h2>Agradecimientos</h2>
       <p>Conoce las empresas que colaboran con nosotros y hacen posible que ayudemos a tontos niños</p>
       <p><a class="btn btn-secondary" href="/agradecimientos" role="button">Conoce más&raquo;</a></p>
     </secion><!-- /.col-lg-4 -->
   </article><!-- /.row -->
 </div>
</div>
@endsection
