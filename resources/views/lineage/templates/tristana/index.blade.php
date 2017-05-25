@extends('layouts.tristana')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')



<div class="col-lg-12">
		@foreach($posts as $post)
		<div class="thumbnail">
		<div class="thumbnail-header">
			<h3><a href="#" class="hvr-underline-from-center">{{$post->titulo}}</a></h3>
			<span><img src="skin/tristana/images/clocks.png" alt="clocks"><time>{{$post->created_at}}</time>
		</div>
		<div class="caption">
		@if($post->imagen == "noticia.jpg")
				<img src='storage/noticias/noticia.jpg' width="600" height="200">
				@else
				<img src='{{$post->portada}}' width="600" height="200">
				@endif

		{!!$post->descripcioncorta!!}
		<hr>
			<p><a href="http://forum.agecold.ru/" target="_blank" class="btn btn-default btn-more" role="button"><img src="skin/tristana/images/plus.png">Leer Mas!!</a></p>



		</div>
	</div>
	@endforeach
</div>




@endsection