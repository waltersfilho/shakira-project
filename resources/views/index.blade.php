@extends('layout.indexlayout')

@section('title', 'Welcome')

@section('corpo')

    <div class="row" id="header">
      <div class="jumbotron" id="first"></div>
      <h1 class="text-center" id="h1first">
        Encontre seu instrumento musical<br>
      </h1>
    </div>
    <br>
  
    <div class="row">
      <div class="col-sm-6 col-md-6">
      <a href="cordas.html" class="thumbnail">
        <img src="img/icon_cordas.png" alt="cordas" class="home img-rounded">
        <div class="caption">
        <h3>Cordas</h3>
        </div>
      </a>
      </div>
      <div class="col-sm-6 col-md-6">
      <a href="sopro.html" class="thumbnail">
        <img src="img/icon_sopro.png" alt="sopro" class="home img-circle" class="img-circle">
        <div class="caption">
        <h3>Sopro</h3>
        </div>
      </a>
      </div>
    </div>
  
    <div id="descricao">
      <div class="quem-somos">
        <p id="capitular">  
          <strong>MusicPoint</strong> é um catálogo de instrumentos musicais de diversos tipos, como cordas e sopro.<br>
          A página leva destaque por conter uma grande variedade de fotos, todas com altissima qualidade.
        </p>
      </div>
    </div>
  </div>

  <br> 


@endsection