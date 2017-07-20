<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercício 4 - Tema Livre - Instrumentos Musicais - Inicio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Zilla+Slab" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  </head>
  <body id="index-body">
	<div class="container-fluid">
		<nav class="navbar navbar-inverse navbar-fixed-top navbar-inner container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="index">
				MusicPoint
			  </a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="index"><i class="glyphicon glyphicon-home red"> Inicio </i></a></li>
				<li><a href="/cordas"> Cordas </a</li>
				<li><a href="/contato"> Contato </a></li>					
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<form class="navbar-form navbar-right" role="search">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Encontre" name="srch-term" id="srch-term">
						<div class="input-group-btn">
							<button class="btn btn-danger" type="submit"><i class="glyphicon glyphicon-search"></i></button>
						</div>
					</div>
				</form>
			  </ul>
			</div><!-- /.navbar-collapse -->
		</nav>
		
			@yield('corpo')

			<div class="inscricao">
			<p> Receba instrumentos selecionados e artigos do blog direto na sua caixa de entrada. </p>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Seu email">
				<div class="input-group-btn">
					<button class="btn btn-danger" type="submit"><i class="glyphicon glyphicon-pushpin"></i></button>
				</div>
			</div>
		</div>
		<div class="rodape">
		  <footer>
			<span> MusicPoint - Todos os direitos reservados. </span><br>
			<span> Email: <a href="email:contato@musicpoint.com.br" class="red"> contato@musicpoint.com.br </a></span>
		  </footer>
		</div>
  </body>
</html>
