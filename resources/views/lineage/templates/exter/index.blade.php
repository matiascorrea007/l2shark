@extends('layouts.exter')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')


<!--popup Facebook-->




<!--popup Facebook-->

    	<div class="scroller">
        
        @if(!empty($box))
      {!! $box->box!!}
      @endif
      

    		@foreach($posts as $post)	

    	 	            <div class="news">
                <div class="nheading">
                    <a href="{{ url('blogdetail-post'.$post->id) }}" class="ntitle">{{$post->titulo}}</a>

                  <div class="ndate"><span><img src="skin/tristana/images/clocks.png" alt="clocks"><time>{{$post->created_at}}</time></div>
                    <div class="clear"></div>
                </div>
                <div class="ncontent">
                
                @if($post->imagen == "noticia.jpg")
				<img src='storage/noticias/noticia.jpg' width="400" height="150">
				@else
				<img src='{{$post->portada}}' width="400" height="150">
				@endif

               
               {!!$post->descripcioncorta!!}

				<hr>


                </div>
                <div class="ninfo">
                    <i></i>
                    <div class="left">Autor: <span>Admin</span></div>    </a><div class="right"><a href="{{ url('/blogdetail-post'.$post->id) }}"><img src="skin/tristana/images/plus.png">{{ trans('layout.Leer Mas!!') }}</a></div>
                </div>
            </div>
            @endforeach
    	</div>






@endsection