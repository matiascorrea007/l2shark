@extends('layouts.altrone')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')


<div class="col-lg-12">
		
<div id="news"><br>
  <div class="ntitle">{{$post->titulo}}<div class="ndate">{{$post->created_at}}</div></div>
  <div class="ncontent">

  				@if($post->imagen == "noticia.jpg")
				<img src='storage/noticias/noticia.jpg' width="400" height="150">
				@else
				<img src='{{$post->portada}}' width="400" height="150">
				@endif

				{!!$post->descripcionlarga!!}</div>
</div>

</div>



<a href="{{ url('/') }}" class='default dbig' style='margin: 14px auto 0 !important;'>Regresar &raquo;</a>


@endsection