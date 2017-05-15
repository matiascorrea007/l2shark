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
use Soft\web_coin_servicio;
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

        $coin = web_coin_servicio::first();

        try
        {
             $characters = DB::connection('externa')->table('characters')->where('account_name','=',Auth::user()->login)->paginate(7);
        }
        catch(\PDOException $e)
        {
            $characters = "";
             flash('no se puedo realizar la conexion a la BD.')->error();
            
        }
        
        
        return view ('lineage.admin.servicios.index',compact('characters','coin'));
    }


    public function ObtenerCharacter(Request $request, $charnombre)
    {

        //si es una peticion ajax
        if ($request->ajax()) {
            $nombre = DB::connection('externa')->table('characters')->where('char_name','=',$charnombre)->first();

            return response()->json([
                 $nombre
                ]);
        }

    }



    public function NickNameColor(NickNameColorRequest $request)
    {
        $char_nombre = $request['charnombre'];

        
        if (empty($char_nombre)) {
            Alert::error('UPs!', 'Seleccione un personaje');
        return Redirect::to('/servicios');
        }


        $character= DB::connection('externa')->table('characters')->where('char_name','=',$char_nombre)
            //hacemos la actualizacion de la tabla
            ->update(['name_color' => $request['nicknamecolor']]);
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
        flash('message-error','los campor del Nombre Y Re-Nombre no coinciden!!')->error();
        return Redirect::to('/servicios');
        }

        //para comprobar que el nombe no exista en la base de datos
        $nombre = DB::connection('externa')->table('characters')->where('char_name','=',$request['nickname'])->first();
        if (empty($nombre)) {
            
            $character= DB::connection('externa')->table('characters')->where('char_name','=',$char_nombre)
            //hacemos la actualizacion de la tabla
            ->update(['char_name' => $request['nickname']]);;
           
            

        Alert::success('Mensaje existoso', 'Nombre Modificado');
        return Redirect::to('/servicios');

        }else{

        flash('message-error','El NOMBRE ingresado ya se encuentra en uso!!')->success();
        return Redirect::to('/servicios');
        }
    }










     public function ClanName(Request $request)
    {

        return view ('lineage.admin.servicios.index');
    }










     public function Sex(Request $request)
    {

       $char_nombre = $request['charnombre'];
        
        
        //para comprobar que se selecciono un personaje
        if (empty($char_nombre)) {
            Alert::error('UPs!', 'Seleccione un personaje');
        return Redirect::to('/servicios');
        }

        
        if ($request['sex'] == 'hombre') {
             $character= DB::connection('externa')->table('characters')->where('char_name','=',$char_nombre)
            //hacemos la actualizacion de la tabla
            ->update(['sex' => 0]);

        }else{
            $character= DB::connection('externa')->table('characters')->where('char_name','=',$char_nombre)
            //hacemos la actualizacion de la tabla
            ->update(['sex' => 1]);
        }

        Alert::success('Mensaje existoso', 'Sexo Modificado');
        return Redirect::to('/servicios');
    }








     public function Unstuck(Request $request)
    {

        return view ('lineage.admin.servicios.index');
    }








     public function Noblesse(Request $request)
    {

         $char_nombre = $request['charnombre'];
        
        
        //para comprobar que se selecciono un personaje
        if (empty($char_nombre)) {
            Alert::error('UPs!', 'Seleccione un personaje');
        return Redirect::to('/servicios');
        }

        
        //si ya es nobles que avise con un mensaje
        $char = character::where('char_name','=',$char_nombre)->first();
        if ($char->nobless == 1) {
            flash('El Personaje Seleccionado ya es Nobless!!')->error();
             return Redirect::to('/servicios');
        }else{
            $character= DB::connection('externa')->table('characters')->where('char_name','=',$char_nombre)
            //hacemos la actualizacion de la tabla
            ->update(['nobless' => 1]);

        Alert::success('Mensaje existoso', 'Su personaje ahora es Nobless');
        return Redirect::to('/servicios');
        }
    }








     public function Hero(Request $request)
    {

        return view ('lineage.admin.servicios.index');
    }









     public function Vip(Request $request)
    {

        return view ('lineage.admin.servicios.index');
    }




        public function CoinServicioUpdate(Request $request)
    {
        \Session::forget('items');
        flash('Items del Combo Eliminados.')->success();
        return Redirect::back();
    }


   
}
