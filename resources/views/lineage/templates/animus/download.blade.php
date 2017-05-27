@extends('layouts.animus')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')





<div class="title">Seccion de Descargas</div>
    <div class="scroller">
        <div class='page all' data-bind='1'>                                                                                                                                      
                                                                                                                                                                                                              
				{!!$paginas->descargas!!}
		<hr>
                            
        </div>
    </div>




@endsection