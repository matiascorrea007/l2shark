@extends('layouts.diamond')
@include('alerts.errors')
@section('content')



<div class="animated" style="animation-delay: 0.5s; animation-name: zoomIn;">
		<img src="skin/diamond/images/news-title-estadisticas.jpg" class="wr_title" id="logoTop">
			<section class="news clear_fix">
                        
                        <div class='page all' data-bind='1'>
								
						<div class="news-block animated zoomIn">
							<article class="post clear_fix" style="border-top:none;border-bottom: 1px solid #35343a;">
								<div class="post_wrapp">
									<div class="post_wrapp_v2">
								
										<div class="title">
											<a class="hvr-underline-from-center"></a>
										</div>
										<div class="date">
											
										</div>
										<div class="post_text">
											<div class="post_about" style="margin:0 0 0 0;">

												
												<div class="col-lg-12">
		
		<div class="">
		<div class="caption">
		
		
<div class="page">

<ul class="nav nav-tabs ">
  <li><a href="{{ url('top-pvp') }}">Top PVP</a></li>
  <li><a  href="{{ url('top-pk') }}">Top PK</a></li>
  <li><a  href="{{ url('top-clan') }}">Top Clan</a></li>
  <li><a  href="{{ url('top-hp') }}">Top HP</a></li>
  <li><a  href="{{ url('top-mp') }}">Top MP</a></li>
  <li><a  href="{{ url('top-olympiad') }}">Olympiad Ranking</a></li>
  <li class="active"><a  href="{{ url('top-heroes') }}">Heroes</a></li>
  <li><a  href="{{ url('top-mas-activos') }}">Top Activos</a></li>
  <li><a  href="{{ url('top-donadores') }}">Top Donadores</a></li>
  <li><a  href="{{ url('player-online') }}">Online</a></li>
</ul>
<hr>

	
	<h1>Heroes </h1>
	
	<div class="pddInner">
		A continuación se muestran Todos los Heroes
	</div>
	
	<table cellspacing="0" cellpadding="0" border="0" class="table table-bordered table-hover">
		
		<tr>
			<th class="pos"></th>
			<th>Nombre</th>
			<th>Class</th>
			<th>Clan</th>
			<th>Ally</th>
		</tr>
		
		@foreach($heroes as $heroe)
		<tbody>
			<tr class="two">
				<td class="pos">{{$contador = $contador + 1}}º</td>
				<td><b>{{$heroe->char_name}}</b></td>
				<td><b>{{$heroe->class_name}}</b></td>
				<td><b>{{$heroe->clan_name}}</b></td>
				<td><b>{{$heroe->ally_name}}</b></td>
				

				


			</tr>
		</tbody>
		@endforeach

		</table>

	</div>

	

		</div>
	</div>

</div>





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