@extends('layouts.diamond')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')






<div class="animated" style="animation-delay: 0.5s; animation-name: zoomIn;">
		<img src="skin/diamond/images/news-title-soporte.jpg" class="wr_title" id="logoTop">
			<section class="news clear_fix">
                        
                        <div class='page all' data-bind='1'>
								
						<div class="news-block animated zoomIn">
							<article class="post clear_fix" style="border-top:none;border-bottom: 1px solid #35343a;">
								<div class="post_wrapp">
									<div class="post_wrapp_v2">
								
										<div class="title">
											
										</div>
										<div class="date">
											{{$paginas->created_at}}
										</div>
										<div class="post_text">
											<div class="post_about" style="margin:0 0 0 0;">

												
												{!!$paginas->soporte!!}




											</div>

								</div>
										
									</div>
								</div>
							</article>
						</div>

						</div>


						<div class="page_navigator">
							<div id="pager" class="clearfix">
								<ul>
									
								</ul>
							</div>
						</div>
				<a id="btn_more_news"></a>
			</section>
</div>


@endsection