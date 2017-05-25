@extends('layouts.monster')
@include('alerts.errors')
@section('content')

<div class="castled">
					<div class="ct">Dion Castle</div>
					<div class="table-scrollable">
            <table class="table table-hover table-light">
 				<tbody>
 					<tr>
    				<td><div class="imgc dion"><span></span></div></td>
    				<td></td>
    				</tr>
 					<tr>
    				<td>Clan Propietario:</td>
    				<td class="green">@if(!empty($DionClan))
    									{{$DionClan->clan_name}}
    								  @else
    								  	 <p class="red">Libre</p>	
    								  @endif</td>
    				</tr>
					<tr>
    				<td>Clan Líder:</td>
    				<td class="green">@if(!empty($DionClan))
    									{{$DionClan->char_name}}
    								  @endif</td>
					</tr>
					<tr>
    				<td>Alianza:</td>
    				<td class="green">@if(!empty($DionClan))
    									{{$DionClan->ally_name}}
									  @endif</td>
					</tr>
					<tr>
    				<td>Guerra Siguiente:</td>
    				<td class="green">{{date('D\, j M Y H\:i',$Dion->siegeDate/1000)}} Horas</td>
					</tr>
					<tr>
    				<td>Tasa:</td>
    				<td class="green">{{$Dion->taxPercent}}%</td>
					</tr>
					<tr>
    				<td>Atacantes:</td>
    				<td></td>
    				</tr>
    				<tr>
    				<td>Defensores:</td>
    				<td></td>
    				</tr>
				</tbody>
  			</table>
        </div>
	</div>

	<div class="castled">
					<div class="ct">Schuttgart Castle</div>
					<div class="table-scrollable">
            <table class="table table-hover table-light">
 				<tbody>
 					<tr>
    				<td><div class="imgc schuttgart"><span></span></div></td>
    				<td></td>
    				</tr>
 					<tr>
    				<td>Clan Propietario:</td>
    				<td class="green">@if(!empty($SchuttgartClan))
    									{{$SchuttgartClan->clan_name}}
    								  @else
    								  	 <p class="red">Libre</p>	
    								  @endif</td>
    				</tr>
					<tr>
    				<td>Clan Líder:</td>
    				<td class="green">@if(!empty($SchuttgartClan))
    									{{$SchuttgartClan->char_name}}
    								  @endif</td>
					</tr>
					<tr>
    				<td>Alianza:</td>
    				<td class="green">@if(!empty($SchuttgartClan))
    									{{$SchuttgartClan->ally_name}}
									  @endif</td>
					</tr>
					<tr>
    				<td>Guerra Siguiente:</td>
    				<td class="green">{{date('D\, j M Y H\:i',$Schuttgart->siegeDate/1000)}} Horas</td>
					</tr>
					<tr>
    				<td>Tasa:</td>
    				<td class="green">{{$Schuttgart->taxPercent}}%</td>
					</tr>
					<tr>
    				<td>Atacantes:</td>
    				<td></td>
    				</tr>
    				<tr>
    				<td>Defensores:</td>
    				<td></td>
    				</tr>
				</tbody>
  			</table>
        </div>
	</div>

	<div class="castled">
					<div class="ct">Oren Castle</div>
					<div class="table-scrollable">
            <table class="table table-hover table-light">
 				<tbody>
 					<tr>
    				<td><div class="imgc oren"><span></span></div></td>
    				<td></td>
    				</tr>
 					<tr>
    				<td>Clan Propietario:</td>
    				<td class="green">@if(!empty($OrenClan))
    									{{$OrenClan->clan_name}}
    								  @else
    								  	 <p class="red">Libre</p>	
    								  @endif</td>
    				</tr>
					<tr>
    				<td>Clan Líder:</td>
    				<td class="green">@if(!empty($OrenClan))
    									{{$OrenClan->char_name}}
    								  @endif</td>
					</tr>
					<tr>
    				<td>Alianza:</td>
    				<td class="green">@if(!empty($OrenClan))
    									{{$OrenClan->ally_name}}
									  @endif</td>
					</tr>
					<tr>
    				<td>Guerra Siguiente:</td>
    				<td class="green">{{date('D\, j M Y H\:i',$Oren->siegeDate/1000)}} Horas</td>
					</tr>
					<tr>
    				<td>Tasa:</td>
    				<td class="green">{{$Oren->taxPercent}}%</td>
					</tr>
					<tr>
    				<td>Atacantes:</td>
    				<td></td>
    				</tr>
    				<tr>
    				<td>Defensores:</td>
    				<td></td>
    				</tr>
				</tbody>
  			</table>
        </div>
	</div>

	<div class="castled">
					<div class="ct">Gludio Castle</div>
					<div class="table-scrollable">
            <table class="table table-hover table-light">
 				<tbody>
 					<tr>
    				<td><div class="imgc gludio"><span></span></div></td>
    				<td></td>
    				</tr>
 					<tr>
    				<td>Clan Propietario:</td>
    				<td class="green">@if(!empty($GludioClan))
    									{{$GludioClan->clan_name}}
    								  @else
    								  	 <p class="red">Libre</p>	
    								  @endif</td>
    				</tr>
					<tr>
    				<td>Clan Líder:</td>
    				<td class="green">@if(!empty($GludioClan))
    									{{$GludioClan->char_name}}
    								  @endif</td>
					</tr>
					<tr>
    				<td>Alianza:</td>
    				<td class="green">@if(!empty($GludioClan))
    									{{$GludioClan->ally_name}}
									  @endif</td>
					</tr>
					<tr>
    				<td>Guerra Siguiente:</td>
    				<td class="green">{{date('D\, j M Y H\:i',$Gludio->siegeDate/1000)}} Horas</td>
					</tr>
					<tr>
    				<td>Tasa:</td>
    				<td class="green">{{$Gludio->taxPercent}}%</td>
					</tr>
					<tr>
    				<td>Atacantes:</td>
    				<td></td>
    				</tr>
    				<tr>
    				<td>Defensores:</td>
    				<td></td>
    				</tr>
				</tbody>
  			</table>
        </div>
	</div>

	<div class="castled">
					<div class="ct">Goddard Castle</div>
					<div class="table-scrollable">
            <table class="table table-hover table-light">
 				<tbody>
 					<tr>
    				<td><div class="imgc goddard"><span></span></div></td>
    				<td></td>
    				</tr>
 					<tr>
    				<td>Clan Propietario:</td>
    				<td class="green">@if(!empty($GoddardClan))
    									{{$GoddardClan->clan_name}}
    								  @else
    								  	 <p class="red">Libre</p>	
    								  @endif</td>
    				</tr>
					<tr>
    				<td>Clan Líder:</td>
    				<td class="green">@if(!empty($GoddardClan))
    									{{$GoddardClan->char_name}}
    								  @endif</td>
					</tr>
					<tr>
    				<td>Alianza:</td>
    				<td class="green">@if(!empty($GoddardClan))
    									{{$GoddardClan->ally_name}}
									  @endif</td>
					</tr>
					<tr>
    				<td>Guerra Siguiente:</td>
    				<td class="green">{{date('D\, j M Y H\:i',$Goddard->siegeDate/1000)}} Horas</td>
					</tr>
					<tr>
    				<td>Tasa:</td>
    				<td class="green">{{$Goddard->taxPercent}}%</td>
					</tr>
					<tr>
    				<td>Atacantes:</td>
    				<td></td>
    				</tr>
    				<tr>
    				<td>Defensores:</td>
    				<td></td>
    				</tr>
				</tbody>
  			</table>
        </div>
	</div>

	<div class="castled">
					<div class="ct">Innadril Castle</div>
					<div class="table-scrollable">
            <table class="table table-hover table-light">
 				<tbody>
 					<tr>
    				<td><div class="imgc innadril"><span></span></div></td>
    				<td></td>
    				</tr>
 					<tr>
    				<td>Clan Propietario:</td>
    				<td class="green">@if(!empty($InnadrilClan))
    									{{$InnadrilClan->clan_name}}
    								  @else
    								  	 <p class="red">Libre</p>	
    								  @endif</td>
    				</tr>
					<tr>
    				<td>Clan Líder:</td>
    				<td class="green">@if(!empty($InnadrilClan))
    									{{$InnadrilClan->char_name}}
    								  @endif</td>
					</tr>
					<tr>
    				<td>Alianza:</td>
    				<td class="green">@if(!empty($InnadrilClan))
    									{{$InnadrilClan->ally_name}}
									  @endif</td>
					</tr>
					<tr>
    				<td>Guerra Siguiente:</td>
    				<td class="green">{{date('D\, j M Y H\:i',$Innadril->siegeDate/1000)}} Horas</td>
					</tr>
					<tr>
    				<td>Tasa:</td>
    				<td class="green">{{$Innadril->taxPercent}}%</td>
					</tr>
					<tr>
    				<td>Atacantes:</td>
    				<td></td>
    				</tr>
    				<tr>
    				<td>Defensores:</td>
    				<td></td>
    				</tr>
				</tbody>
  			</table>
        </div>
	</div>

	<div class="castled">
					<div class="ct">Giran Castle</div>
					<div class="table-scrollable">
            <table class="table table-hover table-light">
 				<tbody>
 					<tr>
    				<td><div class="imgc giran"><span></span></div></td>
    				<td></td>
    				</tr>
 					<tr>
    				<td>Clan Propietario:</td>
    				<td class="green">@if(!empty($GiranClan))
    									{{$GiranClan->clan_name}}
    								  @else
    								  	 <p class="red">Libre</p>	
    								  @endif</td>
    				</tr>
					<tr>
    				<td>Clan Líder:</td>
    				<td class="green">@if(!empty($GiranClan))
    									{{$GiranClan->char_name}}
    								  @endif</td>
					</tr>
					<tr>
    				<td>Alianza:</td>
    				<td class="green">@if(!empty($GiranClan))
    									{{$GiranClan->ally_name}}
									  @endif</td>
					</tr>
					<tr>
    				<td>Guerra Siguiente:</td>
    				<td class="green">{{date('D\, j M Y H\:i',$Giran->siegeDate/1000)}} Horas</td>
					</tr>
					<tr>
    				<td>Tasa:</td>
    				<td class="green">{{$Giran->taxPercent}}%</td>
					</tr>
					<tr>
    				<td>Atacantes:</td>
    				<td></td>
    				</tr>
    				<tr>
    				<td>Defensores:</td>
    				<td></td>
    				</tr>
				</tbody>
  			</table>
        </div>
	</div>

	<div class="castled">
					<div class="ct">Aden Castle</div>
					<div class="table-scrollable">
            <table class="table table-hover table-light">
 				<tbody>
 					<tr>
    				<td><div class="imgc aden"><span></span></div></td>
    				<td></td>
    				</tr>
 					<tr>
    				<td>Clan Propietario:</td>
    				<td class="green">@if(!empty($AdenClan))
    									{{$AdenClan->clan_name}}
    								  @else
    								  	 <p class="red">Libre</p>	
    								  @endif</td>
    				</tr>
					<tr>
    				<td>Clan Líder:</td>
    				<td class="green">@if(!empty($AdenClan))
    									{{$AdenClan->char_name}}
    								  @endif</td>
					</tr>
					<tr>
    				<td>Alianza:</td>
    				<td class="green">@if(!empty($AdenClan))
    									{{$AdenClan->ally_name}}
									  @endif</td>
					</tr>
					<tr>
    				<td>Guerra Siguiente:</td>
    				<td class="green">{{date('D\, j M Y H\:i',$Aden->siegeDate/1000)}} Horas</td>
					</tr>
					<tr>
    				<td>Tasa:</td>
    				<td class="green">{{$Aden->taxPercent}}%</td>
					</tr>
					<tr>
    				<td>Atacantes:</td>
    				<td></td>
    				</tr>
    				<tr>
    				<td>Defensores:</td>
    				<td></td>
    				</tr>
				</tbody>
  			</table>
        </div>
	</div>

	<div class="castled">
					<div class="ct">Rune Castle</div>
					<div class="table-scrollable">
            <table class="table table-hover table-light">
 				<tbody>
 					<tr>
    				<td><div class="imgc rune"><span></span></div></td>
    				<td></td>
    				</tr>
 					<tr>
    				<td>Clan Propietario:</td>
    				<td class="green">@if(!empty($RuneClan))
    									{{$RuneClan->clan_name}}
    								  @else
    								  	 <p class="red">Libre</p>	
    								  @endif</td>
    				</tr>
					<tr>
    				<td>Clan Líder:</td>
    				<td class="green">@if(!empty($RuneClan))
    									{{$RuneClan->char_name}}
    								  @endif</td>
					</tr>
					<tr>
    				<td>Alianza:</td>
    				<td class="green">@if(!empty($RuneClan))
    									{{$RuneClan->ally_name}}
									  @endif</td>
					</tr>
					<tr>
    				<td>Guerra Siguiente:</td>
    				<td class="green">{{date('D\, j M Y H\:i',$Rune->siegeDate/1000)}} Horas</td>
					</tr>
					<tr>
    				<td>Tasa:</td>
    				<td class="green">{{$Rune->taxPercent}}%</td>
					</tr>
					<tr>
    				<td>Atacantes:</td>
    				<td></td>
    				</tr>
    				<tr>
    				<td>Defensores:</td>
    				<td></td>
    				</tr>
				</tbody>
  			</table>
        </div>
	</div>

@endsection