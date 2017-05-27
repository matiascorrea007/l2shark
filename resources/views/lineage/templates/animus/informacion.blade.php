@extends('layouts.animus')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')


<div class="title">Seccion de Informacion</div>
    <div class="scroller">
        <div class='page all' data-bind='1'>                                                                                                                                      
                                                                                                                                                                                                              
				{!!$paginas->informacion!!}
		<hr>
                            
        </div>
    </div>



@endsection