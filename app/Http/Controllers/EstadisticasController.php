<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;
use Alert;
use Session;
use Redirect;
use Storage;
use DB;
use Image;


class EstadisticasController extends BaseController
{
    //con este constructor llamo a las variales que hay en la clase padre que es BaseController
 public function __construct(){
       parent::__construct();
    }



    public function rankingPVP()
    {   

        $playerpvps = DB::table('characters')->where('pvpkills','>',1)->orderBy('pvpkills', 'des')->paginate(100);
        $contador = 0;
         return view ('lineage.estadisticas.pvp',compact('playerpvps','contador'));
    }




    public function rankingPK()
    {   
        
        $playerpks = DB::table('characters')->where('pkkills','>',1)->orderBy('pkkills', 'des')->paginate(100);
        $contador = 0;
         return view ('lineage.estadisticas.pk',compact('playerpks','contador'));
    }



    public function rankingClan()
    {   
        
        $clanCastles = DB::table('clan_data')
        ->join('characters', 'clan_data.leader_id', '=', 'characters.obj_id')
        ->join('castle', 'clan_data.hasCastle', '=', 'castle.id')
        ->orderBy('clan_level', 'des')->get();


        $clans = DB::table('clan_data')
        ->join('characters', 'clan_data.leader_id', '=', 'characters.obj_id')
        ->orderBy('clan_level', 'des')->get();


        $contador = 0;

        
         return view ('lineage.estadisticas.clan',compact('clans','clanCastles','contador'));
    }

    public function rankingHp()
    {   
        $playerhps = DB::table('characters')->where('maxHp','>',1)->orderBy('maxHp', 'des')->paginate(100);
        $contador = 0;
         return view ('lineage.estadisticas.hp',compact('playerhps','contador'));
    }

    public function rankingMp()
    {   
        
        $playermps = DB::table('characters')->where('maxMp','>',1)->orderBy('maxMp', 'des')->paginate(100);
        $contador = 0;
         return view ('lineage.estadisticas.mp',compact('playermps','contador'));
    }

    public function rankingActivos()
    {   
        
        $playeractivos = DB::table('characters')->where('onlinetime','>',1)->orderBy('onlinetime', 'des')->paginate(100);
        $contador = 0;
         return view ('lineage.estadisticas.activos',compact('playeractivos','contador'));
    }

    public function rankingOnline()
    {   
        
        $playeronlines = DB::table('characters')->where('online','=',1)->orderBy('char_name', 'des')->get();
        $contador = 0;
         return view ('lineage.estadisticas.online',compact('playeronlines','contador'));
    }

    public function rankingDonadores()
    {   
        
        
        
         return view ('lineage.estadisticas.donadores');
    }


    public function rankingHeroes()
    {   
        
        $heroes = DB::table('characters')
        ->where('nobless','=',1)
        ->join('clan_data', 'characters.clanid', '=', 'clan_data.clan_id')
        ->join('class_list', 'characters.classid', '=', 'class_list.id')
        ->orderBy('char_name', 'des')
        ->get();
        $contador = 0;
         return view ('lineage.estadisticas.heroes',compact('heroes','contador'));
    }

}
