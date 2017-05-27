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

class SiegeController extends BaseController
{
        
    //con este constructor llamo a las variales que hay en la clase padre que es BaseController
    public function __construct(){
       parent::__construct();
    }


    public function siege()
    {
        
        $caslte = 

       $Aden = DB::table('castle')
      ->where('name','=','Aden')
      ->first();

      $AdenClan = DB::table('clan_data')
      ->join('castle', 'clan_data.hasCastle', '=', 'castle.id')
      ->where('name','=','Aden')
      ->first();

      $Dion = DB::table('castle')
      ->where('name','=','Dion')
      ->first();

      $DionClan = DB::table('clan_data')
      ->join('castle', 'clan_data.hasCastle', '=', 'castle.id')
      ->where('name','=','Dion')
      ->first();

      $Giran = DB::table('castle')
      ->where('name','=','Giran')
      ->first();

      $GiranClan = DB::table('clan_data')
      ->join('castle', 'clan_data.hasCastle', '=', 'castle.id')
      ->join('characters', 'clan_data.leader_id', '=', 'characters.obj_id')
      ->where('name','=','Giran')
      ->first();

      
      
      $Gludio = DB::table('castle')
      ->where('name','=','Gludio')
      ->first();

      $GludioClan = DB::table('clan_data')
      ->join('castle', 'clan_data.hasCastle', '=', 'castle.id')
      ->where('name','=','Gludio')
      ->first();

      $Goddard = DB::table('castle')
      ->where('name','=','Goddard')
      ->first();

      $GoddardClan = DB::table('clan_data')
      ->join('castle', 'clan_data.hasCastle', '=', 'castle.id')
      ->where('name','=','Goddard')
      ->first();

      $Innadril = DB::table('castle')
      ->where('name','=','Innadril')
      ->first();

      $InnadrilClan = DB::table('clan_data')
      ->join('castle', 'clan_data.hasCastle', '=', 'castle.id')
      ->where('name','=','Innadril')
      ->first();

      $Oren = DB::table('castle')
      ->where('name','=','Oren')
      ->first();

      $OrenClan = DB::table('clan_data')
      ->join('castle', 'clan_data.hasCastle', '=', 'castle.id')
      ->where('name','=','Oren')
      ->first();

      $Rune = DB::table('castle')
      ->where('name','=','Rune')
      ->first();

      $RuneClan = DB::table('clan_data')
      ->join('castle', 'clan_data.hasCastle', '=', 'castle.id')
      ->where('name','=','Rune')
      ->first();

      $Schuttgart = DB::table('castle')
      ->where('name','=','Schuttgart')
      ->first();

      $SchuttgartClan = DB::table('clan_data')
      ->join('castle', 'clan_data.hasCastle', '=', 'castle.id')
      ->where('name','=','Schuttgart')
      ->first();

      
      $skin = web_skin::first();

        if ($skin->nombre == "element") {
        return view ('lineage.templates.element.siege',compact('Aden','AdenClan','Dion','DionClan','Giran','GiranClan','Gludio','GludioClan','Goddard','GoddardClan','Innadril','InnadrilClan','Oren','OrenClan','Rune','RuneClan','Schuttgart','SchuttgartClan'));
        }

        if ($skin->nombre == "tristana") {
        return view ('lineage.templates.tristana.siege',compact('Aden','AdenClan','Dion','DionClan','Giran','GiranClan','Gludio','GludioClan','Goddard','GoddardClan','Innadril','InnadrilClan','Oren','OrenClan','Rune','RuneClan','Schuttgart','SchuttgartClan'));
        }

        if ($skin->nombre == "animus") {
        return view ('lineage.templates.animus.siege',compact('Aden','AdenClan','Dion','DionClan','Giran','GiranClan','Gludio','GludioClan','Goddard','GoddardClan','Innadril','InnadrilClan','Oren','OrenClan','Rune','RuneClan','Schuttgart','SchuttgartClan'));
        }
    }

   
}
