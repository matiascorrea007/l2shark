@extends('layouts.crazy')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')









<div class="">

	
	<div id="news">
	<a href="{{ url('blogdetail-post'.$post->id) }}"><div class="news_title"><h3> {{$post->titulo}}</h3></div></a>

	@if($post->imagen == "noticia.jpg")
				<div class=""><img src="storage/noticias/noticia.jpg"  height="150" width="450" alt="" class="news_img" /></div>
				@else
				<div class=""><img src="{{$post->portada}}"  height="150" width="450" alt="" class="news_img" /></div>
				@endif

	<br>	
	<div class="news_content">
	<div class="container">
	<div class="row">
		{!!$post->descripcionlarga!!}
		</div>
		</div>
	</div>
	<div class="news_info">
		<div class="news_date">Crado: <span>{!!$post->created_at!!}</span></div>

		<a href="{{ url('/') }}" target="_blank"><img src="" alt="">Regresar</a>
	</div>
</div>


</div>


@endsection