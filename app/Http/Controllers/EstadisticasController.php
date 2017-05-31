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
use Soft\web_skin;


class EstadisticasController extends BaseController
{
    //con este constructor llamo a las variales que hay en la clase padre que es BaseController
 public function __construct(){
       parent::__construct();
    }

      private function skin()
    {
        $skin = web_skin::first();
        return $skin;
    }



    public function rankingPVP()
    {   

        $playerpvps = DB::table('characters')->where('pvpkills','>',1)->orderBy('pvpkills', 'des')->paginate(100);
        $contador = 0;

        

        if ($this->skin()->nombre == "element") {
          return view ('lineage.templates.element.estadisticas.pvp',compact('playerpvps','contador'));
        }

        if ($this->skin()->nombre == "tristana") {
          return view ('lineage.templates.tristana.estadisticas.pvp',compact('playerpvps','contador'));
        }

        if ($this->skin()->nombre == "diamond") {
          return view ('lineage.templates.diamond.estadisticas.pvp',compact('playerpvps','contador'));
        }

         if ($this->skin()->nombre == "altrone") {
          return view ('lineage.templates.altrone.estadisticas.pvp',compact('playerpvps','contador'));
        }

         
    }




    public function rankingPK()
    {   
        
        $playerpks = DB::table('characters')->where('pkkills','>',1)->orderBy('pkkills', 'des')->paginate(100);
        $contador = 0;
        if ($this->skin()->nombre == "element") {
         return view ('lineage.templates.element.estadisticas.pk',compact('playerpks','contador'));
        }

        if ($this->skin()->nombre == "tristana") {
         return view ('lineage.templates.tristana.estadisticas.pk',compact('playerpks','contador'));
        }

        if ($this->skin()->nombre == "diamond") {
         return view ('lineage.templates.diamond.estadisticas.pk',compact('playerpks','contador'));
        }

        if ($this->skin()->nombre == "altrone") {
         return view ('lineage.templates.altrone.estadisticas.pk',compact('playerpks','contador'));
        }
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

        if ($this->skin()->nombre == "element") {
         return view ('lineage.templates.element.estadisticas.clan',compact('clans','clanCastles','contador'));
        }

        if ($this->skin()->nombre == "tristana") {
         return view ('lineage.templates.tristana.estadisticas.clan',compact('clans','clanCastles','contador'));
        }

        if ($this->skin()->nombre == "diamond") {
         return view ('lineage.templates.diamond.estadisticas.clan',compact('clans','clanCastles','contador'));
        }

        if ($this->skin()->nombre == "altrone") {
         return view ('lineage.templates.altrone.estadisticas.clan',compact('clans','clanCastles','contador'));
        }
    }

    public function rankingHp()
    {   
        $playerhps = DB::table('characters')->where('maxHp','>',1)->orderBy('maxHp', 'des')->paginate(100);
        $contador = 0;

        if ($this->skin()->nombre == "element") {
         return view ('lineage.templates.element.estadisticas.hp',compact('playerhps','contador'));
        }
        if ($this->skin()->nombre == "tristana") {
         return view ('lineage.templates.tristana.estadisticas.hp',compact('playerhps','contador'));
        }

        if ($this->skin()->nombre == "diamond") {
         return view ('lineage.templates.diamond.estadisticas.hp',compact('playerhps','contador'));
        }

        if ($this->skin()->nombre == "altrone") {
         return view ('lineage.templates.altrone.estadisticas.hp',compact('playerhps','contador'));
        }
    }

    public function rankingMp()
    {   
        
        $playermps = DB::table('characters')->where('maxMp','>',1)->orderBy('maxMp', 'des')->paginate(100);
        $contador = 0;

        if ($this->skin()->nombre == "element") {
         return view ('lineage.templates.element.estadisticas.mp',compact('playermps','contador'));
        }
        if ($this->skin()->nombre == "tristana") {
         return view ('lineage.templates.tristana.estadisticas.mp',compact('playermps','contador'));
        }

        if ($this->skin()->nombre == "diamond") {
         return view ('lineage.templates.diamond.estadisticas.mp',compact('playermps','contador'));
        }

        if ($this->skin()->nombre == "altrone") {
         return view ('lineage.templates.altrone.estadisticas.mp',compact('playermps','contador'));
        }
    }

    public function rankingActivos()
    {   
        
        $playeractivos = DB::table('characters')->where('onlinetime','>',1)->orderBy('onlinetime', 'des')->paginate(100);
        $contador = 0;

        if ($this->skin()->nombre == "element") {
         return view ('lineage.templates.element.estadisticas.activos',compact('playeractivos','contador'));
        }
        if ($this->skin()->nombre == "tristana") {
         return view ('lineage.templates.tristana.estadisticas.activos',compact('playeractivos','contador'));
        }

        if ($this->skin()->nombre == "diamond") {
         return view ('lineage.templates.diamond.estadisticas.activos',compact('playeractivos','contador'));
        }

        if ($this->skin()->nombre == "altrone") {
         return view ('lineage.templates.altrone.estadisticas.activos',compact('playeractivos','contador'));
        }
    }

    public function rankingOnline()
    {   
        
        $playeronlines = DB::table('characters')->where('online','=',1)->orderBy('char_name', 'des')->get();
        $contador = 0;

        if ($this->skin()->nombre == "element") {
         return view ('lineage.templates.element.estadisticas.online',compact('playeronlines','contador'));
        }
         if ($this->skin()->nombre == "tristana") {
         return view ('lineage.templates.tristana.estadisticas.online',compact('playeronlines','contador'));
        }

        if ($this->skin()->nombre == "diamond") {
         return view ('lineage.templates.diamond.estadisticas.online',compact('playeronlines','contador'));
        }

        if ($this->skin()->nombre == "altrone") {
         return view ('lineage.templates.altrone.estadisticas.online',compact('playeronlines','contador'));
        }
    }

    public function rankingDonadores()
    {   
        
        
        if ($this->skin()->nombre == "element") {
         return view ('lineage.templates.element.estadisticas.donadores');
        }
        if ($this->skin()->nombre == "tristana") {
         return view ('lineage.templates.tristana.estadisticas.donadores');
        }

        if ($this->skin()->nombre == "diamond") {
         return view ('lineage.templates.diamond.estadisticas.donadores');
        }

        if ($this->skin()->nombre == "altrone") {
         return view ('lineage.templates.altrone.estadisticas.donadores');
        }
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

        if ($this->skin()->nombre == "element") {
         return view ('lineage.templates.element.estadisticas.heroes',compact('heroes','contador'));
         }
         if ($this->skin()->nombre == "tristana") {
         return view ('lineage.templates.tristana.estadisticas.heroes',compact('heroes','contador'));
         }

          
         if ($this->skin()->nombre == "diamond") {
         return view ('lineage.templates.diamond.estadisticas.heroes',compact('heroes','contador'));
         }

         if ($this->skin()->nombre == "altrone") {
         return view ('lineage.templates.altrone.estadisticas.heroes',compact('heroes','contador'));
         }
    }

}
