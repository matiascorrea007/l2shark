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
use Flash;


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


         try
        {   
            $playerpvps = DB::connection('externa')->table('characters')->where('pvpkills','>',1)->orderBy('pvpkills', 'des')->paginate(100);
        }
        catch(\PDOException $e)
        {
            
             flash('no se puedo realizar la conexion a la BD.')->error();
            
        }


        
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

        if ($this->skin()->nombre == "crazy") {
          return view ('lineage.templates.crazy.estadisticas.pvp',compact('playerpvps','contador'));
        }

        if ($this->skin()->nombre == "newland") {
          return view ('lineage.templates.newland.estadisticas.pvp',compact('playerpvps','contador'));
        }

         
    }




    public function rankingPK()
    {   
        
         try
        {   
            $playerpks = DB::connection('externa')->table('characters')->where('pkkills','>',1)->orderBy('pkkills', 'des')->paginate(100);
        }
        catch(\PDOException $e)
        {
            
             flash('no se puedo realizar la conexion a la BD.')->error();
            
        }


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

        if ($this->skin()->nombre == "crazy") {
         return view ('lineage.templates.crazy.estadisticas.pk',compact('playerpks','contador'));
        }

        if ($this->skin()->nombre == "newland") {
         return view ('lineage.templates.newland.estadisticas.pk',compact('playerpks','contador'));
        }
    }



    public function rankingClan()
    {   
        try
        {   
             $clanCastles = DB::connection('externa')->table('clan_data')
        ->join('characters', 'clan_data.leader_id', '=', 'characters.obj_id')
        ->join('castle', 'clan_data.hasCastle', '=', 'castle.id')
        ->orderBy('clan_level', 'des')->get();


        $clans = DB::connection('externa')->table('clan_data')
        ->join('characters', 'clan_data.leader_id', '=', 'characters.obj_id')
        ->orderBy('clan_level', 'des')->get();

        }
        catch(\PDOException $e)
        {
      
             flash('no se puedo realizar la conexion a la BD.')->error();
            
        }


        
       

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

        if ($this->skin()->nombre == "crazy") {
         return view ('lineage.templates.crazy.estadisticas.clan',compact('clans','clanCastles','contador'));
        }

        if ($this->skin()->nombre == "newland") {
         return view ('lineage.templates.newland.estadisticas.clan',compact('clans','clanCastles','contador'));
        }
    }

    public function rankingHp()
    {   

        try
        {   

            $playerhps = DB::connection('externa')->table('characters')->where('maxHp','>',1)->orderBy('maxHp', 'des')->paginate(100);

        }
        catch(\PDOException $e)
        {
      
             flash('no se puedo realizar la conexion a la BD.')->error();
            
        }


        
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

        if ($this->skin()->nombre == "crazy") {
         return view ('lineage.templates.crazy.estadisticas.hp',compact('playerhps','contador'));
        }

        if ($this->skin()->nombre == "newland") {
         return view ('lineage.templates.newland.estadisticas.hp',compact('playerhps','contador'));
        }
    }

    public function rankingMp()
    {   
        
         try
        {   
            $playermps = DB::connection('externa')->table('characters')->where('maxMp','>',1)->orderBy('maxMp', 'des')->paginate(100);
        }
        catch(\PDOException $e)
        {
      
             flash('no se puedo realizar la conexion a la BD.')->error();
            
        }


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

        if ($this->skin()->nombre == "crazy") {
         return view ('lineage.templates.crazy.estadisticas.mp',compact('playermps','contador'));
        }

        if ($this->skin()->nombre == "newland") {
         return view ('lineage.templates.newland.estadisticas.mp',compact('playermps','contador'));
        }
    }

    public function rankingActivos()
    {   
        
         try
        {   
             $playeractivos = DB::connection('externa')->table('characters')->where('onlinetime','>',1)->orderBy('onlinetime', 'des')->paginate(100);
        }
        catch(\PDOException $e)
        {
      
             flash('no se puedo realizar la conexion a la BD.')->error();
            
        }


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

        if ($this->skin()->nombre == "crazy") {
         return view ('lineage.templates.crazy.estadisticas.activos',compact('playeractivos','contador'));
        }

        if ($this->skin()->nombre == "newland") {
         return view ('lineage.templates.newland.estadisticas.activos',compact('playeractivos','contador'));
        }
    }

    public function rankingOnline()
    {   
        
         try
        {   
            $playeronlines = DB::connection('externa')->table('characters')->where('online','=',1)->orderBy('char_name', 'des')->get();
        }
        catch(\PDOException $e)
        {
             flash('no se puedo realizar la conexion a la BD.')->error();
        }

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

        if ($this->skin()->nombre == "crazy") {
         return view ('lineage.templates.crazy.estadisticas.online',compact('playeronlines','contador'));
        }

        if ($this->skin()->nombre == "newland") {
         return view ('lineage.templates.newland.estadisticas.online',compact('playeronlines','contador'));
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

        if ($this->skin()->nombre == "crazy") {
         return view ('lineage.templates.crazy.estadisticas.donadores');
        }

        if ($this->skin()->nombre == "newland") {
         return view ('lineage.templates.newland.estadisticas.donadores');
        }
    }


    public function rankingHeroes()
    {   
        

        try
        {   
            $heroes = DB::connection('externa')->table('characters')
        ->where('nobless','=',1)
        ->join('clan_data', 'characters.clanid', '=', 'clan_data.clan_id')
        ->join('class_list', 'characters.classid', '=', 'class_list.id')
        ->orderBy('char_name', 'des')
        ->get();
        }
        catch(\PDOException $e)
        {
             flash('no se puedo realizar la conexion a la BD.')->error();
        }


        
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

         if ($this->skin()->nombre == "crazy") {
         return view ('lineage.templates.crazy.estadisticas.heroes',compact('heroes','contador'));
         }

         if ($this->skin()->nombre == "newland") {
         return view ('lineage.templates.newland.estadisticas.heroes',compact('heroes','contador'));
         }
    }

}
