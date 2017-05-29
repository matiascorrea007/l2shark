@extends('layouts.diamond')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')


<div class="page">
<h1>Galería De Videos</h1>

<div style="padding: 0 20px 40px 20px;">
	
		
	<div class="fullGallery">
		<div>
			
				@foreach($AllVideos as $AllVideo)
					<a href="" class="iframe" rel="prettyPhoto[fullGallery]" data-toggle="modal" data-target="#video-{{$AllVideo->id}}">
						<img src="{{$AllVideo->imagen}}">
						<div></div>
						<span></span>
					</a>
				@endforeach		

			<!--modal-->
			@foreach($AllVideos as $AllVideo)
			<div class="modal fade" id="video-{{$AllVideo->id}}" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button  type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <div>
                                <iframe width="560" height="360" src="{{$AllVideo->link}}" frameborder="10" allowfullscreen></iframe>
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