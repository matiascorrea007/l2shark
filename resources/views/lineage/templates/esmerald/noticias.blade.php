@extends('layouts.esmerald')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')


<div class="col-lg-12">


<div id="news"><br>
  <div class="page-title">{{$post->titulo}}<div class="ndate"></div></div>
  <div class="ncontent">
				<div class="text-center">
  				@if($post->imagen == "noticia.jpg")
				<img src='storage/noticias/noticia.jpg' width="400" height="150">
				@else
				<img src='{{$post->portada}}' width="400" height="150">
				@endif</div>

				<h3>	{!!$post->descripcionlarga!!}</h3></div>
</div>

<div class="text-center">
<a href="{{ url('/') }}"> <span class="news__btn">Regresar!!</span></a>
</div>
</div>





@endsection