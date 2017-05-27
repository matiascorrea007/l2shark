@extends('layouts.animus')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')



<div class="title">Seccion de Soporte</div>
    <div class="scroller">
        <div class='page all' data-bind='1'>                                                                                                                                      
                                                                                                                                                                                                              
				{!!$paginas->soporte!!}
		<hr>
                            
        </div>
    </div>

@endsection