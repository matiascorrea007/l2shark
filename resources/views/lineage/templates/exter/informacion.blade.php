@extends('layouts.altrone')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')


<div class="col-md-12">
		
		<div id="news"><br>
  <div class="ntitle">Informacion del Servidor<div class="ndate">{{$paginas->created_at}}</div></div>
  <div class="ncontent">{!!$paginas->informacion!!}</div>
</div>

</div>


@endsection