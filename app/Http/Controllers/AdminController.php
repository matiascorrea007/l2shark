<?php

namespace Soft\Http\Controllers;
use Illuminate\Http\Request;

use Soft\Http\Requests;
use Soft\web_facebook;
use Soft\web_email;
use Soft\web_logo;
use Soft\web_voto;
use Soft\web_pagina;
use Soft\Recaptcha;
use Soft\Mercadopago;
use Soft\web_serverinfo;
use Soft\web_conexion;
use Soft\Models\Character;
use Soft\Models\ClanDatum;

use Alert;
use Session;
use Redirect;
use Storage;
use DB;
use Image;
use Auth;
use Flash;
use Toastr;
use Carbon\Carbon;
use Exception;
use MP;
use Input;

class AdminController extends AdminBaseController
{   


     public function index(){
        $characters = DB::connection('externa')->table('characters')->first();
        //$characters = DB::connection('externa')->table('characters')->first();

        dd($characters);
        return view ('lineage.admin.index',compact('characters'));
    }


    public function Admin(Request $request){

        //almacenar ultima ip $_SERVER['REMOTE_ADDR']
        //cada vez que ingrese al panel un usuario que me guarde su IP

        try
        {
             $characters = DB::connection('externa')->table('characters')->where('account_name','=',Auth::user()->login)->paginate(7);
        }
        catch(\PDOException $e)
        {
            $characters = "";
             flash('no se puedo realizar la conexion a la BD.')->error();
            
        }

        $link = "home";
     // dd($request->ips());
        return view ('lineage.admin.index',compact('characters','link','xml'));
    }


    public function ObtenerCharacter(Request $request, $character){
        //conexion a la BD
        $conexion = web_conexion::first();


        /*---Interlude L2jfrozen*/
        if ($conexion->cronica->descripcion == "Interlude" and $conexion->serverpack->descripcion == "L2jFrozen") {
           //si es una peticion ajax
        if ($request->ajax()) {
            
               $char = DB::connection('externa')->table('characters')->where('char_name','=',$character)
            ->join('class_list','characters.classid','=','class_list.id')->first();

            //obtengo el clan al que pertenese ese personaje
            $clan = DB::connection('externa')->table('clan_data')->where('clan_id','=', $char->clanid)->first();
            //obtengo las sub que tiene ese personajes
            $sub1 = DB::connection('externa')->table('character_subclasses')->where('char_obj_id','=', $char->obj_Id)->where('class_index','=',1)->join('class_list','character_subclasses.class_id','=','class_list.id')->first();
            $sub2 = DB::connection('externa')->table('character_subclasses')->where('char_obj_id','=', $char->obj_Id)->where('class_index','=',2)->join('class_list','character_subclasses.class_id','=','class_list.id')->first();
            $sub3 = DB::connection('externa')->table('character_subclasses')->where('char_obj_id','=', $char->obj_Id)->where('class_index','=',3)->join('class_list','character_subclasses.class_id','=','class_list.id')->first();

            return response()->json([
                 $char,$clan,$sub1,$sub2,$sub3
                ]);
            }
        }




        /*---Interlude L2jaCis*/
        if ($conexion->cronica->descripcion == "Interlude" and $conexion->serverpack->descripcion == "L2jaCis") {
           //si es una peticion ajax
        if ($request->ajax()) {
            
               $char = DB::connection('externa')->table('characters')->where('char_name','=',$character)
            ->join('class_list','characters.classid','=','class_list.id')->first();

            //obtengo el clan al que pertenese ese personaje
            $clan = DB::connection('externa')->table('clan_data')->where('clan_id','=', $char->clanid)->first();
            //obtengo las sub que tiene ese personajes
            $sub1 = DB::connection('externa')->table('character_subclasses')->where('char_obj_id','=', $char->obj_Id)->where('class_index','=',1)->join('class_list','character_subclasses.class_id','=','class_list.id')->first();
            $sub2 = DB::connection('externa')->table('character_subclasses')->where('char_obj_id','=', $char->obj_Id)->where('class_index','=',2)->join('class_list','character_subclasses.class_id','=','class_list.id')->first();
            $sub3 = DB::connection('externa')->table('character_subclasses')->where('char_obj_id','=', $char->obj_Id)->where('class_index','=',3)->join('class_list','character_subclasses.class_id','=','class_list.id')->first();

            return response()->json([
                 $char,$clan,$sub1,$sub2,$sub3
                ]);
            }
        }



            
        }
        




    public function Config(){
        $logos=web_logo::all();
        $boxs=web_facebook::all();
        $votos=web_voto::all();
        $recaptcha=Recaptcha::first();
        $mercadopago=Mercadopago::first();
        $servidor=web_serverinfo::first();
        $email=web_email::first();
      
        $link = "Configuracion / General";
        return view ('lineage.admin.config.index',compact('link','logos','boxs','votos','recaptcha','mercadopago','servidor','email'));
    }



    public function Paginas(){
        $paginas=web_pagina::first();
        $link =  "Configuracion / Paginas";
        return view ('lineage.admin.paginas.index',compact('link','paginas'));
    }



}
