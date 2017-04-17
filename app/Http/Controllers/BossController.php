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

class BossController extends BaseController
{
    
  //con este constructor llamo a las variales que hay en la clase padre que es BaseController
 public function __construct(){
       parent::__construct();
    }



    public function boss()
    {
        


      //uno las tabla de los grandboss con la de los npc para obtener los nombres
      $boss = DB::table('grandboss_data')
      ->join('npc', 'grandboss_data.boss_id', '=', 'npc.id')
      ->orderBy('level', 'asc')
      ->get();

      $raids = DB::table('raidboss_spawnlist')
      ->join('npc', 'raidboss_spawnlist.boss_id', '=', 'npc.id')
      ->orderBy('level', 'asc')
      ->get();
 
    //$date = Carbon::now();
      
     // dd($date);
        
         return view ('lineage.boss',compact('boss','raids'));

    }



    
}
