@extends('layouts.crazy')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')



<div class="col-lg-12">
		
<div id="news"><br>
  <div class="ntitle">Soporte<div class="ndate">{{$paginas->created_at}}</div></div>
  <div class="ncontent">{!!$paginas->soporte!!}</div>
</div>

</div>




@endsection