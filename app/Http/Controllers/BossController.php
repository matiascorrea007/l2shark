<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;
use Alert;
use Session;
use Redirect;
use Storage;
use DB;
use Carbon\Carbon;
use Soft\web_skin;


class BossController extends BaseController
{
    
  //con este constructor llamo a las variales que hay en la clase padre que es BaseController
 public function __construct(){
       parent::__construct();
    }



    public function boss()
    {
        

      try
        {   
           $boss = DB::connection('externa')->table('grandboss_data')
      ->join('npc', 'grandboss_data.boss_id', '=', 'npc.id')
      ->orderBy('level', 'asc')
      ->get();

      //uno las tabla de los grandboss con la de los npc para obtener los nombres
      $Benom = DB::connection('externa')->table('grandboss_data')
      ->join('npc', 'grandboss_data.boss_id', '=', 'npc.id')
      ->where('name','=','Benom')
      ->orderBy('level', 'asc')
      ->first();

      $Antharas = DB::connection('externa')->table('grandboss_data')
      ->join('npc', 'grandboss_data.boss_id', '=', 'npc.id')
      ->where('name','=','Antharas')
      ->orderBy('level', 'asc')
      ->first();

      $Baium = DB::connection('externa')->table('grandboss_data')
      ->join('npc', 'grandboss_data.boss_id', '=', 'npc.id')
      ->where('name','=','Baium')
      ->orderBy('level', 'asc')
      ->first();

      $QueenAnt = DB::connection('externa')->table('grandboss_data')
      ->join('npc', 'grandboss_data.boss_id', '=', 'npc.id')
      ->where('name','=','Queen Ant')
      ->orderBy('level', 'asc')
      ->first();

      $Core = DB::connection('externa')->table('grandboss_data')
      ->join('npc', 'grandboss_data.boss_id', '=', 'npc.id')
      ->where('name','=','Core')
      ->orderBy('level', 'asc')
      ->first();

      $Valakas = DB::connection('externa')->table('grandboss_data')
      ->join('npc', 'grandboss_data.boss_id', '=', 'npc.id')
      ->where('name','=','Valakas')
      ->orderBy('level', 'asc')
      ->first();

      $Beleth = DB::connection('externa')->table('grandboss_data')
      ->join('npc', 'grandboss_data.boss_id', '=', 'npc.id')
      ->where('name','=','Beleth')
      ->orderBy('level', 'asc')
      ->first();

      $AndreasVanHalter = DB::connection('externa')->table('grandboss_data')
      ->join('npc', 'grandboss_data.boss_id', '=', 'npc.id')
      ->where('name','=','Andreas Van Halter')
      ->orderBy('level', 'asc')
      ->first();

      $Zaken = DB::connection('externa')->table('grandboss_data')
      ->join('npc', 'grandboss_data.boss_id', '=', 'npc.id')
      ->where('name','=','Zaken')
      ->orderBy('level', 'asc')
      ->first();

      $ScarletvanHalisha = DB::connection('externa')->table('grandboss_data')
      ->join('npc', 'grandboss_data.boss_id', '=', 'npc.id')
      ->where('name','=','Scarlet van Halisha')
      ->orderBy('level', 'asc')
      ->first();

      $Frintezza = DB::connection('externa')->table('grandboss_data')
      ->join('npc', 'grandboss_data.boss_id', '=', 'npc.id')
      ->where('name','=','Frintezza')
      ->orderBy('level', 'asc')
      ->first();

      $Orfen = DB::connection('externa')->table('grandboss_data')
      ->join('npc', 'grandboss_data.boss_id', '=', 'npc.id')
      ->where('name','=','Orfen')
      ->orderBy('level', 'asc')
      ->first();

           
        }
        catch(\PDOException $e)
        {
             flash('no se puedo realizar la conexion con grandboss_data.')->error();
        }

      
     

     try
        {   
           $raids = DB::connection('externa')->table('raidboss_spawnlist')
      ->join('npc', 'raidboss_spawnlist.boss_id', '=', 'npc.id')
      ->orderBy('level', 'asc')
      ->get();;
        }
        catch(\PDOException $e)
        {
             flash('no se puedo realizar la conexion con raidboss_spawnlist.')->error();
        }



      
        $skin = web_skin::first();

        if ($skin->nombre == "element") {
          return view ('lineage.templates.element.boss',compact('boss','raids','Benom','Antharas','Baium','QueenAnt','Core','Valakas','Beleth','AndreasVanHalter','Zaken','ScarletvanHalisha','Frintezza','Orfen'));
        }

        if ($skin->nombre == "tristana") {
          return view ('lineage.templates.tristana.boss',compact('boss','raids','Benom','Antharas','Baium','QueenAnt','Core','Valakas','Beleth','AndreasVanHalter','Zaken','ScarletvanHalisha','Frintezza','Orfen'));
        }

        if ($skin->nombre == "animus") {
          return view ('lineage.templates.animus.boss',compact('boss','raids','Benom','Antharas','Baium','QueenAnt','Core','Valakas','Beleth','AndreasVanHalter','Zaken','ScarletvanHalisha','Frintezza','Orfen'));
        }

        if ($skin->nombre == "diamond") {
          return view ('lineage.templates.diamond.boss',compact('boss','raids','Benom','Antharas','Baium','QueenAnt','Core','Valakas','Beleth','AndreasVanHalter','Zaken','ScarletvanHalisha','Frintezza','Orfen'));
        }

        if ($skin->nombre == "altrone") {
          return view ('lineage.templates.altrone.boss',compact('boss','raids','Benom','Antharas','Baium','QueenAnt','Core','Valakas','Beleth','AndreasVanHalter','Zaken','ScarletvanHalisha','Frintezza','Orfen'));
        }

    }



    
}
