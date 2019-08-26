@extends('layouts.main')
	@section('contenido')
    <main class="container target">
  		<section class="row align-items-center">
				<article class="col-sm-10">
				<h1 class="">{{Auth::User()->name}}</h1>
				<a  href="{{route('edit', Auth::User()->id)}}" class="btn btn-warning">Edit Profile</a>
				</article>
  			<section class="col-sm-2"><a href="" class="pull-sright"><img id="avatar" title="profile image" class="img-circle img-responsive" src="{{asset(Auth::User()->avatar)}}"></a></section>
  		  <hr>
  				<article class="col-sm-3">
  					<!--left col-->
  					<ul class="list-group">
  						<li class="list-group-item text-muted" contenteditable="false">Profile</li>
  						<li class="list-group-item text-right"><span class="pull-left"><strong class="">Name: </strong></span>{{Auth::User()->name}}</li>
  						<li class="list-group-item text-right"><span class="pull-left"><strong class="">Email: </strong></span>{{Auth::User()->email}}</li>
  					</ul>
  				</article>
				  <section class=" col-sm-7 panel panel-default">
						<article class="panel-heading"><b>Descripcion de tu perfil </b></article>
						<article class="panel-body">Algo mas que quieras decir </article>
						<br>
						<!-- <button type="button" class="btn btn-primary">Lorem Ipsum -->
				  </section>
				<br>

        <br>
        <hr>
      </section>
      <br>
      <br>
  	</main>

	@endsection
