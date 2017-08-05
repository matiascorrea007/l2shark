@extends('layouts.newland')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')


<section class="bg-grey-50 border-bottom-1 border-grey-300 padding-10">
			<div class="container">
				<ol class="breadcrumb">
					<li><a href="{{ url('/') }}">Inicio</a></li>
					<li><a href="{{ url('/noticias') }}">Noticias</a></li>
					<li class="active">{{$post->titulo}}</li>
				</ol>	
			</div>
		</section>
		
		<section class="padding-top-50 padding-bottom-50 padding-top-sm-30">
			<div class="container">
				<div class="row sidebar">
					<div class="col-md-9 leftside">
						<div class="post post-single">
							<div class="post-header post-author">
								<div class="post-title">
									<h2><a href="#">{{$post->titulo}}</a></h2>
									<ul class="post-meta">
										<li><i class="fa fa-calendar-o"></i> {{$post->created_at}}</li>
									</ul>
								</div>
							</div>
							
							<div class="post-thumbnail">
							@if($post->imagen == "noticia.jpg")
				<img src='storage/noticias/noticia.jpg' width="400" height="150">
				@else
				<img src='{{$post->portada}}' width="400" height="150">
				@endif

								
								<div class="post-caption">Caption ejemplo</div>
							</div>
							
							<p>{!!$post->descripcionlarga!!}</p>
							
			
								
							<div class="row margin-top-40">
								<div class="col-md-8">
									<div class="tags">
										<a href="#">Etiqueta 1</a>
										<a href="#">Etiqueta 2</a>
										<a href="#">Etiqueta 3</a>
										<a href="#">Etiqueta 4</a>
										<a href="#">Etiqueta 5</a>
									</div>
								</div>
								<div class="col-md-4 hidden-xs hidden-sm">
									<ul class="share">	
										<li><a href="#" class="btn btn-sm btn-social-icon btn-facebook" data-toggle="tooltip" title="Share on facebook"><i class="fa fa-facebook"></i></a><span>312</span></li>
										<li><a href="#" class="btn btn-sm btn-social-icon btn-twitter" data-toggle="tooltip" title="Share on twitter"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#" class="btn btn-sm btn-social-icon btn-google-plus" data-toggle="tooltip" title="Share on google"><i class="fa fa-google-plus"></i></a></li>
									</ul>	
								</div>
							</div>	
						</div>
							
						<div class="comments">
							<h4 class="page-header"><i class="fa fa-comment-o"></i>Comentarios</h4>
							<div id="disqus_thread"></div>
							<script>
							/**
							* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
							* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
							*/
							/*
							var disqus_config = function () {
							this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
							this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
							};
							*/
							(function() { // DON'T EDIT BELOW THIS LINE
							var d = document, s = d.createElement('script');

							s.src = '../gameforestyakuzieu.disqus.com/embed.js';

							s.setAttribute('data-timestamp', +new Date());
							(d.head || d.body).appendChild(s);
							})();
							</script>
							<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
							<script id="dsq-count-scr" src="../gameforestyakuzieu.disqus.com/count.js" async></script>
						</div>
					</div>
					
					<div class="col-md-3 rightside">

						
						
						<div class="widget">
							<a href="#"><img src="skin/newland/img/place.jpg" alt=""></a>
						</div>
						

					</div>
				</div>
			</div>
		</section>



@endsection