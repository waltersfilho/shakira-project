@extends('layout.app')

@section('title', 'Welcome')

@section('corpo')

	</nav>

	<h1 class="titulo menu"> Fale Conosco </h1>

	<ol class="breadcrumb">
	  <li><a href="/">Inicio</a></li>
	  <li class="active">Contato</li>
	</ol>

	<div class="row">
		<div class="col-md-6 col-xs-12">
			<div class="form">
				<form method="POST" action="{{ route('enviarContato', ['variavel' => '12' ])}}" accept-charset="UTF-8">
					{{ csrf_field() }}
					{{ method_field('PUT')}}
					<div class="input-group">
						<span class="input-group-addon" id="nome"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" placeholder="Nome" name="nome" aria-describedby="nome" required>
					</div>
					<div class="input-group">
						<span class="input-group-addon" id="email"><i class="glyphicon glyphicon-envelope"></i></span>
						<input type="text" class="form-control" placeholder="Email" name="email" aria-describedby="email" required>
					</div>
					<div class="form-group">
					  <select class="form-control" id="assunto" name="assunto" required>
						<option value="">Selecione um assunto...</option>
						<option value="aulas">Aulas</option>
						<option value="duvidas">Dúvidas</option>
						<option value="reclamacoes">Reclamações</option>
					  </select>
					</div>
					<div class="form-group">
						<label for="comment">Mensagem:</label>
						<textarea class="form-control" rows="5" id="mensagem" name="mensagem" required></textarea>
					</div>
					<center><div class="btn-group" role="group" aria-label="...">
					  <button type="submit" class="btn btn-primary black-background white">Enviar</button>
					  <button type="reset" class="btn btn-default">Limpar</button>
					</div></center>
				</form>
			</div>
		</div>
		<div class="col-md-6 col-xs-12">
			<strong> Email para contato: </strong><br>
			<span> <a href="email:contato@musicpoint.com.br" class="red"> contato@musicpoint.com.br </a> </span>
		</div>
	</div>
	
	<br>

@endsection