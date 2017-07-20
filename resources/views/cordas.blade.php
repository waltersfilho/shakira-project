@extends('layout.app')

@section('title', 'Welcome')

@section('corpo')

	<h1 class="titulo menu"> Cordas </h1>
	
	<ol class="breadcrumb">
	  <li><a href="index.html">Inicio</a></li>
	  <li class="active">Cordas</li>
	</ol>

	<div class="row">
	  <div class="col-sm-6 col-md-6">
		<a href="/violoes" class="thumbnail">
		  <img src="img/violoes.jpg" alt="violoes" class="thumb img-rounded">
		  <div class="caption">
			<h3>Violões</h3>
		  </div>
		</a>
	  </div>
	  <div class="col-sm-6 col-md-6">
		<a href="#" class="thumbnail">
		  <img src="img/guitarras.jpg" alt="guitarras" class="thumb img-rounded" class="img-circle">
		  <div class="caption">
			<h3>Guitarras</h3>
		  </div>
		</a>
	  </div>
	</div>

@endsection