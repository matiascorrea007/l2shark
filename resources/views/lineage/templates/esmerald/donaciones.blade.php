@extends('layouts.esmerald')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')





<div class="col-lg-12">


<div id="news"><br>
  <div class="page-title">Donaciones<div class="ndate"></div></div>
  <div class="ncontent">

				<h3>	{!!$paginas->donaciones!!}</h3></div>
</div>

<div class="text-center">
<a href="{{ url('/') }}"> <span class="news__btn">Regresar!!</span></a>
</div>
</div>



@endsection