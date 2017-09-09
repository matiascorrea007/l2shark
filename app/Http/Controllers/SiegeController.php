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
        
         try
        {   
        $Aden = DB::connection('externa')->table('castle')
        ->where('name','=','Aden')
        ->first();

        $Dion = DB::connection('externa')->table('castle')
      ->where('name','=','Dion')
      ->first();

      $Giran = DB::connection('externa')->table('castle')
      ->where('name','=','Giran')
      ->first();

      $Gludio = DB::connection('externa')->table('castle')
      ->where('name','=','Gludio')
      ->first();

      $Goddard = DB::connection('externa')->table('castle')
      ->where('name','=','Goddard')
      ->first();

      $Innadril = DB::connection('externa')->table('castle')
      ->where('name','=','Innadril')
      ->first();

      
      $Oren = DB::connection('externa')->table('castle')
      ->where('name','=','Oren')
      ->first();
      
      $Rune = DB::connection('externa')->table('castle')
      ->where('name','=','Rune')
      ->first();

      $Schuttgart = DB::connection('externa')->table('castle')
      ->where('name','=','Schuttgart')
      ->first();


        }
        catch(\PDOException $e)
        {
             flash('no se puedo realizar la conexion con castle.')->error();
        }



        try
        { 
           $AdenClan = DB::connection('externa')->table('clan_data')
      ->join('castle', 'clan_data.hasCastle', '=', 'castle.id')
      ->join('characters', 'clan_data.leader_id', '=', 'characters.obj_id')
      ->where('name','=','Aden')
      ->first();
     

      $DionClan = DB::connection('externa')->table('clan_data')
      ->join('castle', 'clan_data.hasCastle', '=', 'castle.id')
      ->join('characters', 'clan_data.leader_id', '=', 'characters.obj_id')
      ->where('name','=','Dion')
      ->first();

     

      $GiranClan = DB::connection('externa')->table('clan_data')
      ->join('castle', 'clan_data.hasCastle', '=', 'castle.id')
      ->join('characters', 'clan_data.leader_id', '=', 'characters.obj_id')
      ->where('name','=','Giran')
      ->first();
      
      $GludioClan = DB::connection('externa')->table('clan_data')
      ->join('castle', 'clan_data.hasCastle', '=', 'castle.id')
      ->join('characters', 'clan_data.leader_id', '=', 'characters.obj_id')
      ->where('name','=','Gludio')
      ->first();


      $GoddardClan = DB::connection('externa')->table('clan_data')
      ->join('castle', 'clan_data.hasCastle', '=', 'castle.id')
      ->join('characters', 'clan_data.leader_id', '=', 'characters.obj_id')
      ->where('name','=','Goddard')
      ->first();

      $InnadrilClan = DB::connection('externa')->table('clan_data')
      ->join('castle', 'clan_data.hasCastle', '=', 'castle.id')
      ->join('characters', 'clan_data.leader_id', '=', 'characters.obj_id')
      ->where('name','=','Innadril')
      ->first();

      $OrenClan = DB::connection('externa')->table('clan_data')
      ->join('castle', 'clan_data.hasCastle', '=', 'castle.id')
      ->join('characters', 'clan_data.leader_id', '=', 'characters.obj_id')
      ->where('name','=','Oren')
      ->first();

      $RuneClan = DB::connection('externa')->table('clan_data')
      ->join('castle', 'clan_data.hasCastle', '=', 'castle.id')
      ->join('characters', 'clan_data.leader_id', '=', 'characters.obj_id')
      ->where('name','=','Rune')
      ->first();

      $SchuttgartClan = DB::connection('externa')->table('clan_data')
      ->join('castle', 'clan_data.hasCastle', '=', 'castle.id')
      ->join('characters', 'clan_data.leader_id', '=', 'characters.obj_id')
      ->where('name','=','Schuttgart')
      ->first();
        }
        catch(\PDOException $e)
        {
             flash('no se puedo realizar la conexion con clan_data.')->error();
        }
       

     

      
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

        if ($skin->nombre == "diamond") {
        return view ('lineage.templates.diamond.siege',compact('Aden','AdenClan','Dion','DionClan','Giran','GiranClan','Gludio','GludioClan','Goddard','GoddardClan','Innadril','InnadrilClan','Oren','OrenClan','Rune','RuneClan','Schuttgart','SchuttgartClan'));
        }

        if ($skin->nombre == "altrone") {
        return view ('lineage.templates.altrone.siege',compact('Aden','AdenClan','Dion','DionClan','Giran','GiranClan','Gludio','GludioClan','Goddard','GoddardClan','Innadril','InnadrilClan','Oren','OrenClan','Rune','RuneClan','Schuttgart','SchuttgartClan'));
        }

        if ($skin->nombre == "crazy") {
        return view ('lineage.templates.crazy.siege',compact('Aden','AdenClan','Dion','DionClan','Giran','GiranClan','Gludio','GludioClan','Goddard','GoddardClan','Innadril','InnadrilClan','Oren','OrenClan','Rune','RuneClan','Schuttgart','SchuttgartClan'));
        }

        if ($skin->nombre == "newland") {
        return view ('lineage.templates.newland.siege',compact('Aden','AdenClan','Dion','DionClan','Giran','GiranClan','Gludio','GludioClan','Goddard','GoddardClan','Innadril','InnadrilClan','Oren','OrenClan','Rune','RuneClan','Schuttgart','SchuttgartClan'));
        }

        if ($skin->nombre == "esmerald") {
        return view ('lineage.templates.esmerald.siege',compact('Aden','AdenClan','Dion','DionClan','Giran','GiranClan','Gludio','GludioClan','Goddard','GoddardClan','Innadril','InnadrilClan','Oren','OrenClan','Rune','RuneClan','Schuttgart','SchuttgartClan'));
        }
    }

   
}
