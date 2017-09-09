@extends('layouts.esmerald')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')


		



	

@foreach($posts as $post)
	<div class="news">
    <div class="news__image">
    <a href="{{ url('blogdetail-post'.$post->id) }}">
	@if($post->imagen == "noticia.jpg")
				<img src='storage/noticias/noticia.jpg' width="400" height="150" class="nimg">
				@else
				<img src='{{$post->portada}}' width="400" height="150" class="nimg">
				@endif
				</a>

    </div>
    <div class="news__info">
        <div class="news__name">{{$post->titulo}}</div>
        <div class="news__desc">
            {!!$post->descripcioncorta!!}
        </div>
    </div>
    <div class="clear"></div>
    <div class="news__footer">
        <div class="news__date">{{$post->created_at}}</b></div>
           <a href="{{ url('blogdetail-post'.$post->id) }}"> <span class="news__btn">Leer Mas!!</span></a>                        
    </div>
</div>
@endforeach



@endsection