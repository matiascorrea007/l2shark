@extends('layouts.crazy')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')


<div class="col-lg-12">
		
<div id="news"><br>
  <div class="news_info"><h2>Donaciones</h2><div class="ndate"></div></div>
  <br><br>
  <div class="ncontent">{!!$paginas->donaciones!!}</div>
</div>

</div>




@endsection