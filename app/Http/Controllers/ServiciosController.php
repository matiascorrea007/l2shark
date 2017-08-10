<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;
use Soft\Http\Requests\NickNameColorRequest;
use Soft\Http\Requests\NickNameRequest;

use DB;
use Alert;
use Session;
use Redirect;
use Storage;
use Image;
use Auth;
use Flash;
use Input;
use Soft\web_facebook;
use Soft\web_coin_servicio;
use Soft\Models\character;
use Soft\User;

class ServiciosController extends AdminBaseController
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
        
        $link = "servicios";

        return view ('lineage.admin.servicios.index',compact('characters','coin','link'));
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

        //validamos que selecciono a un personaje
        if (empty($char_nombre)) {
            Alert::error('UPs!', 'Seleccione un personaje');
        return Redirect::to('/servicios');
        }

        $user = User::find(Auth::user()->id);
        $coin = web_coin_servicio::first();

        //para corraborar que el saldo sea suficiente
        if ($coin->nicknamecolor > $user->saldo) {
            Flash('Saldo Insuficiente')->error();
            return Redirect::to('/servicios');
        }else{
            //descontamos el saldo
            $user->saldo = $user->saldo - $coin->nicknamecolor;
            $user->save();
            Alert::success('Mensaje existoso', 'color del Nickname modificado');
        }

        $character= DB::connection('externa')->table('characters')->where('char_name','=',$char_nombre)
            //hacemos la actualizacion de la tabla
            ->update(['name_color' => $request['nicknamecolor']]);
    
        return Redirect::to('/servicios');
    }




    public function TitleNameColor(Request $request)
    {   
       
     
        $char_nombre = $request['charnombre'];

        //validamos que selecciono a un personaje
        if (empty($char_nombre)) {
            Alert::error('UPs!', 'Seleccione un personaje');
        return Redirect::to('/servicios');
        }

        $user = User::find(Auth::user()->id);
        $coin = web_coin_servicio::first();

        //para corraborar que el saldo sea suficiente
        if ($coin->titlecolor > $user->saldo) {
            Flash('Saldo Insuficiente')->error();
            return Redirect::to('/servicios');
        }else{
            //descontamos el saldo
            $user->saldo = $user->saldo - $coin->titlecolor;
            $user->save();
            Alert::success('Mensaje existoso', 'color del titulo modificado');
        }

        $character= DB::connection('externa')->table('characters')->where('char_name','=',$char_nombre)
            //hacemos la actualizacion de la tabla
            ->update(['title_color' => $request['titlenamecolor']]);
    
        return Redirect::to('/servicios');
    }






     public function RemoveKarma(Request $request)
    {
       
        $char_nombre = $request['charnombre'];

        //validamos que selecciono a un personaje
        if (empty($char_nombre)) {
            Alert::error('UPs!', 'Seleccione un personaje');
        return Redirect::to('/servicios');
        }

        $user = User::find(Auth::user()->id);
        $coin = web_coin_servicio::first();

        //para corraborar que el saldo sea suficiente
        if ($coin->removekarma > $user->saldo) {
            Flash('Saldo Insuficiente')->error();
            return Redirect::to('/servicios');
        }else{
            //descontamos el saldo
            $user->saldo = $user->saldo - $coin->removekarma;
            $user->save();
            Alert::success('Mensaje existoso', 'Karma Restaurado');
        }

        $character= DB::connection('externa')->table('characters')->where('char_name','=',$char_nombre)
            //hacemos la actualizacion de la tabla
            ->update(['karma' => 0]);


        return Redirect::to('/servicios');
    }






     public function PkCounter(Request $request)
    {   
        $char_nombre = $request['charnombre'];

        //validamos que selecciono a un personaje
        if (empty($char_nombre)) {
            Alert::error('UPs!', 'Seleccione un personaje');
        return Redirect::to('/servicios');
        }

        $user = User::find(Auth::user()->id);
        $coin = web_coin_servicio::first();

        //para corraborar que el saldo sea suficiente
        if ($coin->pkreset > $user->saldo) {
            Flash('Saldo Insuficiente')->error();
            return Redirect::to('/servicios');
        }else{
            //descontamos el saldo
            $user->saldo = $user->saldo - $coin->pkreset;
            $user->save();
            Alert::success('Mensaje existoso', 'PK Restaurado');
        }

        $character= DB::connection('externa')->table('characters')->where('char_name','=',$char_nombre)
            //hacemos la actualizacion de la tabla
            ->update(['pkkills' => 0]);


        return Redirect::to('/servicios');
    }






     public function NickName(NickNameRequest $request)
    {
        $char_nombre = $request['charnombre'];
        
        
        //para comprobar que se selecciono un personaje
        if (empty($char_nombre)) {
            Alert::error('UPs!', 'Seleccione un personaje');
        return Redirect::to('/servicios');
        }

        
        $user = User::find(Auth::user()->id);
        $coin = web_coin_servicio::first();

        //para corraborar que el saldo sea suficiente
        if ($coin->nickname > $user->saldo) {
            Flash('Saldo Insuficiente')->error();
            return Redirect::to('/servicios');
        }else{
            //descontamos el saldo
            $user->saldo = $user->saldo - $coin->nickname;
            $user->save();
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

        flash('El NOMBRE ingresado ya se encuentra en uso!!')->error();
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

        $user = User::find(Auth::user()->id);
        $coin = web_coin_servicio::first();

        //para corraborar que el saldo sea suficiente
        if ($coin->sex > $user->saldo) {
            Flash('Saldo Insuficiente')->error();
            return Redirect::to('/servicios');
        }else{
            //descontamos el saldo
            $user->saldo = $user->saldo - $coin->sex;
            $user->save();
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

        $char_nombre = $request['charnombre'];


        //validamos que selecciono a un personaje
        if (empty($char_nombre)) {
            Alert::error('UPs!', 'Seleccione un personaje');
        return Redirect::to('/servicios');
        }


        $user = User::find(Auth::user()->id);
        $coin = web_coin_servicio::first();

        //para corraborar que el saldo sea suficiente
        if ($coin->unstuck > $user->saldo) {
            Flash('Saldo Insuficiente')->error();
            return Redirect::to('/servicios');
        }else{
            //descontamos el saldo
            $user->saldo = $user->saldo - $coin->unstuck;
            $user->save();
            Alert::success('Mensaje existoso', 'Unstuck realizado Corractamente');
        }
        

        //movemos al character
        $character= DB::connection('externa')->table('characters')->where('char_name','=',$char_nombre)
        ->update(['x' =>81918,'y'=>148045,'z'=>-3405]);


        return Redirect::to('/servicios');
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
        $char = DB::connection('externa')->table('characters')->where('char_name','=',$char_nombre)->first();
        if ($char->nobless == 1) {
            flash('El Personaje Seleccionado ya es Nobless!!')->error();
             return Redirect::to('/servicios');
        }

        $user = User::find(Auth::user()->id);
        $coin = web_coin_servicio::first();

        //para corraborar que el saldo sea suficiente
        if ($coin->noblesse > $user->saldo) {
            Flash('Saldo Insuficiente')->error();
            return Redirect::to('/servicios');
        }else{
            //descontamos el saldo
            $user->saldo = $user->saldo - $coin->noblesse;
            $user->save();
            Alert::success('Mensaje existoso', 'Noblesse Activado Corractamente');
        }

      
            $character= DB::connection('externa')->table('characters')->where('char_name','=',$char_nombre)->update(['nobless' => 1]);
            //hacemos la actualizacion de la tabla
            

        
        return Redirect::to('/servicios');
        
    }








     public function Hero(Request $request)
    {

         $char_nombre = $request['charnombre'];
     
        
        //para comprobar que se selecciono un personaje
        if (empty($char_nombre)) {
            Alert::error('UPs!', 'Seleccione un personaje');
        return Redirect::to('/servicios');
        }

         //si ya es heroes que avise con un mensaje
        $char = DB::connection('externa')->table('characters')->where('char_name','=',$char_nombre)->first();
        if ($char->hero == 1) {
            flash('El Personaje Seleccionado ya es Hero!!')->error();
             return Redirect::to('/servicios');
        }

        $user = User::find(Auth::user()->id);
        $coin = web_coin_servicio::first();

        //para corraborar que el saldo sea suficiente
        if ($coin->noblesse > $user->saldo) {
            Flash('Saldo Insuficiente')->error();
            return Redirect::to('/servicios');
        }else{
            //descontamos el saldo
            $user->saldo = $user->saldo - $coin->noblesse;
            $user->save();
            Alert::success('Mensaje existoso', 'Hero Activado Corractamente');
        }

      
            $character= DB::connection('externa')->table('characters')->where('char_name','=',$char_nombre)->update(['hero' => 1]);
            //hacemos la actualizacion de la tabla

       return Redirect::to('/servicios');
    }









     public function Vip(Request $request)
    {

        return view ('lineage.admin.servicios.index');
    }







        public function CoinServicioUpdate(Request $request)
    {
        $coin = web_coin_servicio::first();
        $coin->fill($request->all());
        $coin->save();

        flash('Coins modificados con exito.')->success();
        return Redirect::back();
    }


   
}
