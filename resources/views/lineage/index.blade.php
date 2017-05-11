@extends('layouts.monster')
@include('alerts.errors')
@section('content')


<div class="row ">
<div class='news'><div>
@foreach($posts as $post)

			<div class="col-xs-12 col-sm-12 col-md-6">
			<div class='new show'>
				<a class='imgn' href='index-18.htm?page=news&id=17'>
				@if($post->imagen == "noticia.jpg")
				<img src='storage/noticias/noticia.jpg'>
				@else
				<img src='{{$post->portada}}'>
				@endif
				<span></span></a>
				<a class='titn' href='index-18.htm?page=news&id=17' class='titlen'>{{$post->titulo}}</a>
				<div class='datan'>{{$post->created_at}}</div>
				<div class='contentn'>
					{!!$post->descripcioncorta!!}
				</div>
				
				{!! link_to_route('paginas.postDetalle', $title = '', $parameters = $post->id  , $attributes = ['class'=>'lern']); !!}
			</div>
			</div>
			

@endforeach
</div>
	</div>
{!! $posts->render() !!}
</div>
@endsection