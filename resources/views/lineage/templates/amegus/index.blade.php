@extends('layouts.amegus')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')


<!--popup Facebook-->


<div id="fanback" style="display: block;">
<div id="fan-exit"></div>
<div id="fanbox">
<div id="fanclose"></div>

</div></div>

<!--popup Facebook-->



@foreach($posts as $post)	
<div id="content_padding">
	            <div class="news">
                <div class="nheading">
                    <div class="ntitle"><a href="{{ url('blogdetail-post'.$post->id) }}"></a>{{$post->titulo}}</div>
                    <div class="ndate"><span>{{$post->created_at}}</div>
                </div>
                <div class="ncontent">
                	 @if($post->imagen == "noticia.jpg")
				<img src='storage/noticias/noticia.jpg' width="400" height="150">
				@else
				<img src='{{$post->portada}}' width="400" height="150">
				@endif

                <p style="text-align: justify;">{!!$post->descripcioncorta!!}</p>


                </div>
                <div class="ninfo">
                    <i></i>
                    <div class="left">Autor: <span>{{$post->user->login}}</span></div>   
                    <div class="right"><a href='{{ url('/blogdetail-post'.$post->id) }}'>{{ trans('layout.Leer Mas!!') }}</a></div>
                </div>
            </div>
	</div>
@endforeach



@endsection