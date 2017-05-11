@extends('layouts.monster')
@include('alerts.errors')
@section('content')


<div class="page">
<h1>Galería</h1>

<div style="padding: 0 20px 40px 20px;">
	
		
	<div class="fullGallery">
		<div>
			
				@foreach($videos as $video)
					<a href="" class="iframe" rel="prettyPhoto[fullGallery]" data-toggle="modal" data-target="#video-{{$video->id}}">
						<img src="{{$video->imagen}}">
						<div></div>
						<span></span>
					</a>
				@endforeach				
		</div>
	</div>
	
	<br><br>
	
		
	<div class="rmsg" style="background: #fff2a8; color: #000;">Quiere que su screenshot o video aparezcan en nuestra galería? <a href="?page=support">Envíenos!</a></div>

</div>

</div>

@include('lineage.modal.video')
@endsection