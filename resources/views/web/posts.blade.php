@extends('layouts.app')

@section('content')

<div class="container">

	<div class="col-md-8 col-md-offset-2">
		<h1>Noticias</h1>

		@foreach($posts as $post)
			<div class="panel panel-primary">
				<div class="panel-heading">
					<b>{{ $post->name }}</b>
				</div>
				<div class="panel-body">
					@if($post->image)
					<img src="{{ $post->image }}" class="img-responsive ">
					@endif
					{{ $post->excerpt }}
					<br>
					<a href="{{ route('post', $post->slug) }}" class="pull-right">Leer más</a>
					<hr>
					<b>Etiquetas:</b> 
					@foreach($post->tags as $tag)
					<a href="{{ route('tag', $tag->slug) }}">
						<span class="label label-primary">{{ $tag->name }}</span>

					</a>
					@endforeach
				</div>
			</div>
		@endforeach
		{{ $posts->render() }}
	</div>
	
</div>

@endsection