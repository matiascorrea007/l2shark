@extends('layouts.tristana')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')


<div class="col-lg-12">
		
		<div class="thumbnail">
		<div class="thumbnail-header">
			<h3><a  href="{{ url('blogdetail-post'.$post->id) }}" class="hvr-underline-from-center">{{$post->titulo}}</a></h3>
			<span><img src="skin/tristana/images/clocks.png" alt="clocks"><time>{{$post->created_at}}</time>
		</div>
		<div class="caption">
		
		{!!$post->descripcionlarga!!}
		<hr>

		</div>
	</div>

</div>



<a href="{{ url('/') }}" class='default dbig' style='margin: 14px auto 0 !important;'>Regresar &raquo;</a>


@endsection