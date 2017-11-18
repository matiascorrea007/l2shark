@extends('layouts.hawk')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')


<!--popup Facebook


<div id="fanback" style="display: block;">
<div id="fan-exit"></div>
<div id="fanbox">
<div id="fanclose"></div>
@if(!empty($box))
      {!! $box->box!!}
      @endif
</div></div>

 popup Facebook-->


<div class="">
@foreach($posts as $post)	
 <br><br> <div id="news">
	


 

   			<div class="news_info">
  			<div class="news_date pull-right"><span class="">Creadon :{{$post->created_at}}</span>
			</div>
			
			<div class="news_date pull-left"> 
			<a href="{{ url('blogdetail-post'.$post->id) }}" class="news_title">{{$post->titulo}}</a>
			</div>
		</div>	

  <div class="news_text">
  @if($post->imagen == "noticia.jpg")


				<p class="text-center"><img src='storage/noticias/noticia.jpg' width="400" height="150"></p>
				@else
				<p class="text-center"><img src='{{$post->portada}}' width="400" height="150"></p>
				@endif

				{!!$post->descripcioncorta!!}

				<hr>
			

			<p class="text-center"><a href="{{ url('/blogdetail-post'.$post->id) }}" target="_blank" class="btn btn-warning  btn-sm" role="button"><img src="skin/tristana/images/plus.png">{{ trans('layout.Leer Mas!!') }}</a></p>
			
			


			</div>
</div>
@endforeach

</div>



@endsection