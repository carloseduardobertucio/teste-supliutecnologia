<!doctype html>
<html lang="pt-br" data-bs-theme="auto">
	
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Supliu Tecnologia - Discografia Tião Carreiro e Pardinho">
        <meta name="author" content="Carlos Eduardo Bertucio ">

        <title>Discografia Tião Carreiro e Pardinho</title>

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="/assets/css/style.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    </head>

	<section class='head'>
		<header>
			<div class="container" style="text-align:right;margin-bottom:10px;">
				<form action="/logout" method="POST">@csrf Olá, {{ Auth::user()->name }}! Deseja <a href="/logout" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>?</form>
			</div>
			<div class="container d-flex flex-wrap justify-content-center">
				<a href="/dashboard/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto">
					<span class="fs-4 logo"><img src="/assets/img/logo.png"></span>
				</a>
				<form action="/dashboard/" method="GET" class="col-auto col-lg-4 mb-lg-0 search">
					<input name="search" id="search" type="search" class="form-control" placeholder="Pesquisar faixa?" aria-label="Search">
				</form>
			</div>
		</header>
	</section>
    
	<section class='body'>
		<div style="text-align:right;">
			<a href="/dashboard/adicionar/album/" class="btn btn-primary mt-2 mb-2">Adicionar Álbum</a>@if($album_registros > 0) <a href="/dashboard/adicionar/musica/" class="btn btn-primary mt-2 mb-2">Adicionar Música</a>@endif
		</div>
		@foreach ($albums as $album)
			@if (in_array($album->id,$album_auth, true) || $search == "")
			<table class="table table-hover">
				<thead>
					<tr style="background-color:#C4C4C4;">
						<th colspan="3"><b>Álbum:</b> {{$album->nome}}, {{$album->lancamento}}</th>
						<th style="width:80px;"><a href="/dashboard/editar/album/{{$album->id}}"><img alt="Editar" title="Editar" style="width:20px;height:20px;" src="/assets/img/icons/pen-to-square-solid.svg"></a> | <a href="/dashboard/excluir/album/{{$album->id}}"><img style="width:20px;height:20px;" src="/assets/img/icons/trash-can-solid.svg"></a></th>
					</tr>
					<tr>
						<th scope="col" style="width:40px;">Nº</th>
						<th scope="col">Faixa</th>
						<th scope="col" style="width:60px;">Duração</th>
						<th scope="col" style="width:70px;">Ações</th>
					</tr>
				</thead>
				@foreach ($musicas as $musica)
					@if ($album->id == $musica->album)
					<tbody>
						<tr>
							<td>{{$musica->faixa}}</td>
							<td>{{$musica->nome}}</td>
							<td>{{$musica->duracao}}</td>
							<td><a href="/dashboard/editar/musica/{{$musica->id}}"><img alt="Editar" title="Editar" style="width:20px;height:20px;" src="/assets/img/icons/pen-to-square-solid.svg"></a> | <a href="/dashboard/excluir/musica/{{$musica->id}}"><img style="width:20px;height:20px;" src="/assets/img/icons/trash-can-solid.svg"></a></td>
						</tr>
					</tbody>
					@endif
				@endforeach
			</table>
			@endif
		@endforeach

		@if ($registros == 0)

		<table style="margin-top:30px;margin-bottom:30px;">
			<tr>
				@if ($search)
				<th colspan="4">Não encontramos nenhuma faixa, pesquisando por <b>"{{$search}}"</b>.</th>
				@else
				<th colspan="4">Não encontramos nenhuma faixa cadastrada.</th>
				@endif
			</tr>
		</table>

		@endif
	</section>

</html>