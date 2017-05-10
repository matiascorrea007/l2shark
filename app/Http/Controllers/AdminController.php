<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;
use Soft\web_facebook;
use Soft\web_logo;
use Soft\web_voto;
use Soft\web_pagina;
use Alert;
use Session;
use Redirect;
use Storage;
use DB;
use Image;
use Soft\Models\Character;
use Soft\Models\ClanDatum;
use Auth;

class AdminController extends Controller
{   


     public function index(){
        $characters = DB::table('characters')->first();
        //$characters = DB::connection('externa')->table('characters')->first();

        dd($characters);
        return view ('lineage.admin.index',compact('characters'));
    }


    public function Admin(){
        $characters = DB::table('characters')->where('account_name','=',Auth::user()->login)->paginate(7);
        return view ('lineage.admin.index',compact('characters'));
    }


    public function ObtenerCharacter(Request $request, $character){
       
        //si es una peticion ajax
        if ($request->ajax()) {

            $char = DB::table('characters')->where('char_name','=',$character)
            ->join('class_list','characters.classid','=','class_list.id')->first();

            //obtengo el clan al que pertenese ese personaje
            $clan = DB::table('clan_data')->where('clan_id','=', $char->clanid)->first();
            //obtengo las sub que tiene ese personajes
            $sub1 = DB::table('character_subclasses')->where('char_obj_id','=', $char->obj_Id)->where('class_index','=',1)->join('class_list','character_subclasses.class_id','=','class_list.id')->first();
            $sub2 = DB::table('character_subclasses')->where('char_obj_id','=', $char->obj_Id)->where('class_index','=',2)->join('class_list','character_subclasses.class_id','=','class_list.id')->first();
            $sub3 = DB::table('character_subclasses')->where('char_obj_id','=', $char->obj_Id)->where('class_index','=',3)->join('class_list','character_subclasses.class_id','=','class_list.id')->first();

            return response()->json([
                 $char,$clan,$sub1,$sub2,$sub3
                ]);
        }
    }


    public function Config(){
        $logos=web_logo::all();
        $boxs=web_facebook::all();
        $votos=web_voto::all();
        $link = "footer";
        return view ('lineage.admin.config.index',compact('link','logos','boxs','votos'));
    }



    public function Paginas(){
        $paginas=web_pagina::all();
        $link = "footer";
        return view ('lineage.admin.paginas.index',compact('link','paginas'));
    }



}
