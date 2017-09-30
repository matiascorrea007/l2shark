@extends('layouts.altrone')
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
@if(!empty($box))
      {!! $box->box!!}
      @endif
</div></div>

<!--popup Facebook-->


<div class="">
@foreach($posts as $post)	
  <div id="news"><br>
  <a href="{{ url('blogdetail-post'.$post->id) }}" class="ntitle">{{$post->titulo}}</a>
  <div class="ndate"><span><img src="skin/tristana/images/clocks.png" alt="clocks"><time>{{$post->created_at}}</time></div>
  <div class="ncontent">
  @if($post->imagen == "noticia.jpg")
				<img src='storage/noticias/noticia.jpg' width="400" height="150">
				@else
				<img src='{{$post->portada}}' width="400" height="150">
				@endif

				{!!$post->descripcioncorta!!}

				<hr>
			<p><a href="{{ url('/blogdetail-post'.$post->id) }}" target="_blank" class="btn btn-default btn-more" role="button"><img src="skin/tristana/images/plus.png">{{ trans('layout.Leer Mas!!') }}</a></p>

			</div>
</div>
@endforeach

</div>







@endsection