@extends('layout.app')

@section('title', 'Welcome')

@section('corpo')	

	<h1 class="titulo menu"> Violões </h1>
	
	<ol class="breadcrumb">
	  <li><a href="/">Inicio</a></li>
	  <li><a href="/cordas">Cordas</a></li>
	  <li class="active">Violões</li>
	</ol>

	<div class="row">
	  <div class="col-xs-12 col-md-3">
		<a href="img/gibson.jpg" class="thumbnail fancybox">
		  <img src="img/gibson.jpg" alt="Violão Gibson" class="thumb img-rounded">
		  <div class="text-center">
                <small class="text-muted">Gibson</small>
          </div>
		</a>			
	  </div>
	  <div class="col-xs-12 col-md-3">
		<a href="img/taylor.jpg" class="thumbnail fancybox">
		  <img src="img/taylor.jpg" alt="Violão Taylor" class="thumb img-rounded">
		  <div class="text-center">
                <small class="text-muted">Taylor</small>
          </div>
		</a>			
	  </div>
	  <div class="col-xs-12 col-md-3">
		<a href="img/strinberg.jpg" class="thumbnail fancybox">
		  <img src="img/strinberg.jpg" alt="Violão Strinberg" class="thumb img-rounded">
		  <div class="text-center">
                <small class="text-muted">Strinberg</small>
          </div>
		</a>			
	  </div>
	  <div class="col-xs-12 col-md-3">
		<a href="img/cort.jpg" class="thumbnail fancybox">
		  <img src="img/cort.jpg" alt="Violão Cort" class="thumb img-rounded">
		  <div class="text-center">
                <small class="text-muted">Cort</small>
          </div>
		</a>			
	  </div>
	  <div class="col-xs-12 col-md-3">
		<a href="img/takamine.jpg" class="thumbnail fancybox">
		  <img src="img/takamine.jpg" alt="Violão Takamine" class="thumb img-rounded">
		  <div class="text-center">
                <small class="text-muted">Takamine</small>
          </div>
		</a>			
	  </div>
	  <div class="col-xs-12 col-md-3">
		<a href="img/crafter.jpg" class="thumbnail fancybox">
		  <img src="img/crafter.jpg" alt="Violão Crafter" class="thumb img-rounded">
		  <div class="text-center">
                <small class="text-muted">Crafter</small>
          </div>
		</a>			
	  </div>
	  <div class="col-xs-12 col-md-3">
		<a href="img/fender.jpg" class="thumbnail fancybox">
		  <img src="img/fender.jpg" alt="Violão Fender" class="thumb img-rounded">
		  <div class="text-center">
                <small class="text-muted">Fender</small>
          </div>
		</a>			
	  </div>
	  <div class="col-xs-12 col-md-3">
		<a href="img/martin.jpg" class="thumbnail fancybox">
		  <img src="img/martin.jpg" alt="Violão Martin" class="thumb img-rounded">
		  <div class="text-center">
                <small class="text-muted">Martin</small>
          </div>
		</a>			
	  </div>
	</div>

@endsection