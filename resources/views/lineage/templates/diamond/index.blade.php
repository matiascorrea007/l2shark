@extends('layouts.diamond')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')




<div class="animated" style="animation-delay: 0.5s; animation-name: zoomIn;">
		<img src="skin/diamond/images/news-title.jpg" class="wr_title" id="logoTop">
			<section class="news clear_fix">     
                        <div class='page all' data-bind='1'>
						<div class="news-block animated zoomIn">
						@foreach($posts as $post)
							<article class="post clear_fix" style="border-top:none;border-bottom: 1px solid #35343a;">
								<div class="post_wrapp">
									<div class="post_wrapp_v2">
				@if($post->imagen == "noticia.jpg")
				<img src='storage/noticias/noticia.jpg' class="post_image" width="600" height="200">
				@else
				<img src='{{$post->portada}}' class="post_image" width="600" height="200">
				@endif
										<div class="title">
											<a class="hvr-underline-from-center">{{$post->titulo}}</a>
										</div>
										<div class="date">
											{{$post->created_at}}
										</div>
										<div class="post_text">
											<div class="post_about" style="margin:0 0 0 0;">

												
												{!!$post->descripcioncorta!!}




											</div>

								</div>
										<div class="post_info clear_fix" style="margin-top:5px;">
											<ul class="left">
											<li>Autor: <a class="hvr-underline-from-center">[Admin]</a></li>
											<li><a class="comments"></a></li>
											<li><a class="share"></a></li>
											</ul>
											<div class="bot3 right"><a href="{{ url('/blogdetail-post'.$post->id) }}"  id="btn_more"></a></div>
										</div>
									</div>
								</div>
							</article>
								@endforeach
						</div>
						</div>
				
			</section>
</div>




@endsection