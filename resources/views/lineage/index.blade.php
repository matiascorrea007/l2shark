@extends('layouts.monster')
@include('alerts.errors')
@section('content')


@foreach($posts as $post)
<div class='news'><div>
	
			<div class='new'>
				<a class='imgn' href='index-18.htm?page=news&id=17'><img src='imgs\nm\no-img-new.jpg'><span></span></a>
				<a class='titn' href='index-18.htm?page=news&id=17' class='titlen'>{{$post->titulo}}</a>
				<div class='datan'>{{$post->created_at}}</div>
				<div class='contentn'>
					{!!$post->descripcioncorta!!}
				</div>
				
				{!! link_to_route('paginas.postDetalle', $title = '', $parameters = $post->id  , $attributes = ['class'=>'lern']); !!}
			</div>
			

		</div>
	</div>
@endforeach

{!! $posts->render() !!}
@endsection