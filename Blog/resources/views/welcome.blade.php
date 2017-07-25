@extends('template.main')
@section('title'){{'Blog'}}@endsection
@section('content')
	@include('template.partials.main-nav')
	@if (isset($_GET['page']))
		<div class="rwo-fluid">
			<div class="jumbotron">
				<h1 class="text-center">Blog
					<small>Artículos web sobre tecnología</small>
				</h1>
			</div>
		</div>
	@else
		<header>
				<div class="blur">
					<div class="croissant" id="title">
						Blog
					</div>
					<div class="croissant" id="subtitle">
						Artículos web sobre tecnología
					</div>
					<div align="center">
						<a onclick="$('#posts').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});" class="btn btn-web btn-lg">Leer Blog</a>
					</div>
				</div>
		</header>
	@endif
<section id="posts">
	<div class="container">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			@foreach ($posts as $post)
				<h3 class="text-center">{{$post->title}}</h3>
				<div align="center">
					<img src="{{$post->photo}}" title="{{$post->title}}" class="imgresponsive img-thumbnail">
				{{-- </div>
				<br>
				<h5 class="text-justify">
					{!! substr($post->content, 0, 100). '...' !!}
				</h5> --}}
				<br>
				<div align="center">
					<h5 class="text-primary">Temas relacionados al artículo:</h5>
					<?php
						$tags = explode(',', $post->tags);
					?>
					@foreach ($tags as $tag)
							<a href="tag/{{$tag}}" class="pointer"><label for="" class="label label-primary pointer">{{$tag}}</label></a>
					@endforeach
				</div>
				<br>
				<div align="center">
					<a href='articulos/{{$post->slug}}' class="btn btn-success">Leer artículo</a>
				</div>
				<hr>
			@endforeach
		</div>
		</div>
		<div class="container" align="center">
			{!! $posts->render() !!}
		</div>
		<div class="col-md-2"></div>
</section>
@include('template.partials.footer')
@stop
