@extends('layouts.element')
@include('alerts.errors')
@section('content')


<div class='news'><div>
	
			<div class=''>
				<a class='imgn pull-left' href='index-18.htm?page=news&id=17'><img src='skin/globales/img/icon.jpg' height="25" width="25"> <span></span></a>

				<a class='titn pull-left' href="{{ url('blogdetail-post'.$post->id) }}" class='titlen'> 	{{$post->titulo}}</a>

				<div class='datan pull-right'>{{$post->created_at}}</div>

				<br><br>
				<div class='contentn'>
					{!!$post->descripcionlarga!!}
				</div>
				
			
			</div>
			

		</div>
	</div>


<a href="{{ url('/') }}" class='default dbig' style='margin: 14px auto 0 !important;'>Regresar &raquo;</a>


@endsection