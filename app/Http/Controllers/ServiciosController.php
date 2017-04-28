<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;
use Soft\Http\Requests\NickNameColorRequest;
use Soft\Http\Requests\NickNameRequest;

use Alert;
use Session;
use Redirect;
use Storage;
use DB;
use Image;
use View;
use Auth;
use Soft\web_facebook;
use Soft\Models\character;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = DB::table('characters')->where('account_name','=',Auth::user()->login)->paginate(7);
        
        return view ('lineage.admin.servicios.index',compact('characters'));
    }


    public function ObtenerCharacter(Request $request, $charnombre)
    {

        //si es una peticion ajax
        if ($request->ajax()) {
            $nombre = character::where('char_name','=',$charnombre)->first();
            
            

            return response()->json([
                 $nombre->char_name
                ]);
        }

        return view ('lineage.admin.servicios.index');
    }



    public function NickNameColor(NickNameColorRequest $request)
    {
        $char_nombre = $request['charnombre'];

        
        if (empty($char_nombre)) {
            Alert::error('UPs!', 'Seleccione un personaje');
        return Redirect::to('/servicios');
        }


        
        $character=character::where('char_name','=',$char_nombre)->first();
        $character->name_color = $request['nicknamecolor'];
        $character->save();

        Alert::success('Mensaje existoso', 'Modificado Con Exito');
        return Redirect::to('/servicios');
    }






     public function RemoveKarma()
    {

        return view ('lineage.admin.servicios.index');
    }






     public function PkCounter()
    {

        return view ('lineage.admin.servicios.index');
    }






     public function NickName(NickNameRequest $request)
    {
        $char_nombre = $request['charnombre'];
        
        
        //para comprobar que se selecciono un personaje
        if (empty($char_nombre)) {
            Alert::error('UPs!', 'Seleccione un personaje');
        return Redirect::to('/servicios');
        }

        //esto es para ver si coinciden los nombres
        if ($request['nickname'] != $request['re-nickname']) {
          session()->flash('message-error','los campor del Nombre Y Re-Nombre no coinciden!!');
        return Redirect::to('/servicios');
        }

        //para comprobar que el nombe no exista en la base de datos
        $nombre = character::where('char_name','=',$request['nickname'])->first();
        if (empty($nombre)) {
            $character=character::where('char_name','=',$char_nombre)->first();
            $character->char_name = $request['nickname'];
            $character->save();

        Alert::success('Mensaje existoso', 'Nombre Modificado');
        return Redirect::to('/servicios');

        }else{

        session()->flash('message-error','El NOMBRE ingresado ya se encuentra en uso!!');
        return Redirect::to('/servicios');
        }
        
        

       

        return view ('lineage.admin.servicios.index');
    }

     public function ClanName()
    {

        return view ('lineage.admin.servicios.index');
    }

     public function Sex()
    {

        return view ('lineage.admin.servicios.index');
    }

     public function Unstuck()
    {

        return view ('lineage.admin.servicios.index');
    }

     public function Noblesse()
    {

        return view ('lineage.admin.servicios.index');
    }

     public function Hero()
    {

        return view ('lineage.admin.servicios.index');
    }

     public function Vip()
    {

        return view ('lineage.admin.servicios.index');
    }


   
}
