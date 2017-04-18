@extends('layouts.monster')
@include('alerts.errors')
@section('content')


<div class='news'><div>
	
			<div class=''>
				<a class='imgn' href='index-18.htm?page=news&id=17'><img src='imgs\nm\no-img-new.jpg'><span></span></a>
				<a class='titn' href='index-18.htm?page=news&id=17' class='titlen'>{{$post->titulo}}</a>
				<div class='datan'>{{$post->created_at}}</div>
				<div class='contentn'>
					{!!$post->descripcionlarga!!}
				</div>
				
			
			</div>
			

		</div>
	</div>


<a href="{{ url('/') }}" class='default dbig' style='margin: 14px auto 0 !important;'>Regresar &raquo;</a>


@endsection