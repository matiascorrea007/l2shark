@extends('layouts.tristana')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')


<div class="col-lg-12">
		
		<div class="thumbnail">
		<div class="thumbnail-header">
			<h3><a href="#" class="hvr-underline-from-center">Seccion de Descargas</a></h3>
			<span><img src="skin/tristana/images/clocks.png" alt="clocks"><time>{{$paginas->created_at}}</time>
		</div>
		<div class="caption">
		
		{!!$paginas->descargas!!}
		<hr>

		</div>
	</div>

</div>




@endsection