@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-md-8 col-md-offset-2">
	<h1>{{ $post->name }}</h1>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<b>Categoria: </b>
				<a style="color: black;" href="{{ route('category', $post->category->slug) }}">
					<b>{{ $post->category->name }}</b>
				</a>
			</div>
			<div class="panel-body">
				@if($post->image)
				<img src="{{ $post->image }}" class="img-responsive ">
				@endif
				{{ $post->excerpt }}
				<hr>
				{!! $post->body !!}
				<hr>
				@if($post->file)
					<b>Archivo:</b><br><br>
					<a href="{{ $post->file }}">
						<button class="btn btn-primary"><i class="fa fa-download"></i> Descargar</button>
					</a>
					<hr>
				@endif
				<b>Etiquetas:</b> 
				@foreach($post->tags as $tag)
				<a href="{{ route('tag', $tag->slug) }}">
					<span class="label label-primary">{{ $tag->name }}</span>

				</a>
				@endforeach
			</div>
		</div>
	</div>
</div>

@endsection