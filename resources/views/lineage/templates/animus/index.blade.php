@extends('layouts.animus')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')

<div class="title">News</div>
    <div class="scroller">
        <div class='page all' data-bind='1'>                                                                                                                                      
       @foreach($posts as $post)
 <div class="news-block">
                        <div class="news-im" >
                 @if($post->imagen == "noticia.jpg")
                <img src='skin/animus/images/news/news_border7.png' width="600" height="200">
                @else
                <img src='{{$post->portada}}' width="600" height="200">
                @endif

                </div>
                        <div class="news-text">
                            <h2>{{$post->titulo}}</h2>
                            <div class="text">

    {!!$post->descripcioncorta!!}

    </div>
                            <div class="author">Published: <span>{{$post->created_at}}</span> </div>
                            <p><a href="{{ url('/blogdetail-post'.$post->id) }}" target="_blank" class="btn btn-default btn-more" role="button"><img src="skin/tristana/images/plus.png">Leer Mas!!</a></p>
                        </div>
                    </div> 

       @endforeach                                                                                                                                                                                                           

                            
        </div>



    <div class="page_navigator">
                            <div id="pager" class="clearfix">
                    <ul>                                                                                                                                          
                    <li class="current"><a href="/ajax/news/1">1</a></li>        
                    <li><a href="/ajax/news/2">2</a></li> 
                    <li><a href="/ajax/news/3">3</a></li>
                    <li><a href="/ajax/news/4">4</a></li>                                                   
                </div>
                    </div>
        
    </div>



           
		





@endsection