@extends('layouts.tristana')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')


<div class="page">
<h1>Galería De Imagenes</h1>

<div style="padding: 0 20px 40px 20px;">
	
		
	<div class="fullGallery">
		<div>
			
		@foreach($AllImagenes as $AllImagene)
			<a href="" class="iframe" data-toggle="modal" data-target="#img-{{$AllImagene->id}}">
				<img src="{{$AllImagene->url}}">
				<div></div>
				
			</a>
		@endforeach		


				<!--modal-->
		@foreach($AllImagenes as $AllImagene)
			<div class="modal fade" id="img-{{$AllImagene->id}}" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button  type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <div>
                            <img src="{{$AllImagene->url}}" width="560" height="400" alt="">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		@endforeach		


		</div>
	</div>
	
	<br><br>
	
		
	<div class="rmsg" style="background: #fff2a8; color: #000;">Quiere que su screenshot o video aparezcan en nuestra galería? <a href="?page=support">Envíenos!</a></div>

</div>

</div>
@endsection