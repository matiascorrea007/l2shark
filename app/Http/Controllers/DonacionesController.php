<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;
use Soft\Http\Requests\TransferirCoinCuentaRequest;
use Soft\Http\Requests\TransferirCoinPlayerRequest;

use Soft\web_donacione;
use Soft\User;
use Soft\web_donaciones_transferencia;
use Soft\Mercadopago;
use Soft\web_serverinfo;

use Config;
use DB;
use Alert;
use Session;
use Redirect;
use Storage;
use Image;
use Auth;
use Flash;
use Input;
use MP;



class DonacionesController extends AdminBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infoServer = web_serverinfo::first();

        $link =  "Donaciones / Donar";
        return view ('lineage.admin.donaciones.donar',compact('link','infoServer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      
    
        /*--------------------------------------metodo MercadoPago----------------------------------*/
       if ($request['metodo_pgto'] == "mercadopago") {

        $donacion = new web_donacione;
        $donacion->coin = $request['qtdCoins'];
        $donacion->bonus = $request['bonus'];
        $donacion->account = Auth::user()->login;
        $donacion->total = $request['total'];
        $donacion->metodo = $request['metodo_pgto'];
        $donacion->status = "pendiente";
        $donacion->save();




     //agregamos el porcentaje
   // $porcentaje = DB::table('web_mercadopagos')->first();
    $nombre = Auth::user()->login;
    $email = Auth::user()->email;
    $total = (int)$request['total'];


    $mercadopago = Mercadopago::first();


    if (empty($mercadopago)) {
      flash('No se puede realizar compras por MercadoPago por este momento , revise las (Key).')->error(); 
      return Redirect::back();
    }

     $mp = new MP("$mercadopago->public_key", "$mercadopago->private_key");

       
    $preference_data = array(
    "items" => array(
        array(
            "id" => "Code",
            "title" => "Linegae 2 Donacion N".$donacion->id,
            "currency_id" => "AR",
            "picture_url" =>"https://www.mercadopago.com/org-img/MP3/home/logomp3.gif",
            "description" => "Description",
            "category_id" => "Category",
            "quantity" => 1,
            "unit_price" => $total
        )


    ),



    "payer" => array(
        "name" => $nombre,
        "surname" => $nombre,
        "email" => $email,
        "date_created" => "2014-07-28T09:50:37.521-04:00",
        "phone" => array(
            "area_code" => "11",
            "number" => "4444-4444"
        ),
        "identification" => array(
            "type" => "DNI",
            "number" => "12345678"
        ),
        "address" => array(
            "street_name" => "Street",
            "street_number" => 123,
            "zip_code" => "1430"
        )
    ),


  
    "back_urls" => array(
        "success" => "http://sharkestudio.com",
        "failure" => "http://sharkestudio.com",
        "pending" => "http://sharkestudio.com"
    ),


    "auto_return" => "approved",

   

    "payment_methods" => array(

        
        "installments" => 24,
        "default_payment_method_id" => null,
        "default_installments" => null,
    ),



    "shipments" => array(
        "receiver_address" => array(
            "zip_code" => "1430",
            "street_number"=> 123,
            "street_name"=> "Street",
            "floor"=> 4,
            "apartment"=> "C"
        )
    ),


    "notification_url" => "https://www.your-site.com/ipn",
    "external_reference" => "Reference_1234",
    "expires" => false,
    "expiration_date_from" => null,
    "expiration_date_to" => null
    );

    $preference = $mp->create_preference($preference_data);

          return view ('lineage.admin.donaciones.mercadopago',compact('preference'));
       }   /*-----------------------------------metodo MercadoPago----------------------------------*/



    }

   



    public function listar()
    {
        $donaciones = web_donacione::orderBy('created_at','des')->get();
        $link =  "Donaciones / Listar";
        return view ('lineage.admin.donaciones.donaciones-listar',compact('donaciones','link'));
    }



    public function hechas()
    {
        $donaciones = web_donacione::where('account','=',Auth::user()->login)->orderBy('created_at','des')->get();
        $link =  "Donaciones / Hechas";
        return view ('lineage.admin.donaciones.donaciones-hechas',compact('donaciones','link'));
    }


    public function pendientes()
    {
        $donaciones = web_donacione::where('status','=',"pendiente")->orderBy('created_at','des')->get();
        $link =  "Donaciones / Pendientes";
        return view ('lineage.admin.donaciones.donaciones-pendientes',compact('donaciones','link'));
    }





     public function Status(Request $Request , $id){
        $donacion=web_donacione::find($id);
        if ($Request['status'] == "1") {
           $donacion->status= "entregado";
           $donacion->save();
        }else{
            $donacion->status= "pendiente";
            $donacion->save();
        }

        //cargamos el saldo al usuiaro con el total de los coins
        $user = user::find(Auth::user()->id);
        $user->saldo = $donacion->coin + $donacion->bonus;
        $user->save();
            
        Alert::success('Success', 'el saldo se agrego correctamente al usuario');
         return Redirect::to('/donaciones-pendientes');
    }



    public function TransferirCoin()
    {   

         try
        {
             $characters = DB::connection('externa')->table('characters')->where('account_name','=',Auth::user()->login)->paginate(7);
        }
        catch(\PDOException $e)
        {
            $characters = "";
             flash('no se puedo realizar la conexion a la BD.')->error();      
        }

        $link =  "Donaciones / Transferir";

        return view ('lineage.admin.donaciones.donaciones-transferir',compact('characters','link'));
    }


    public function TransferirCoinPlayer(TransferirCoinPlayerRequest $request)
    {   

         $user = User::find(Auth::user()->id);

         //comprobamos el saldo
         if ($request['cantidad'] > $user->saldo) {
                flash('saldo Insuficiente.')->error();
                return Redirect::to('/transferir-coin');    
            }else{
                $user->saldo = $user->saldo - $request['cantidad'];
                $user->save();
            }

        //traigo el item 
         $item = DB::connection('externa')->table('items')->where('owner_id','=',$request['destinatario'])
         ->where('item_id','=',3509)->first();

         //si esta vacio lo creo
         if (empty($item)) {
             DB::connection('externa')->table('items')->insert(
                ['owner_id' => $request['destinatario'], 
               
                'item_id' => 3509,
                'count' => $request['cantidad'],
                'enchant_level' => 0,
                'loc' => "INVENTORY",
                'loc_data' => 0,
                'price_sell' => 0,
                'price_buy' => 0,
                'custom_type1' => 0,
                'custom_type2' => 0,
                'mana_left' => -1,
                ]);


             Alert::success('Success', 'Alex Coins transferidos correctamente');
         }else{
            //si ya existe lo actualiso
            $item = DB::connection('externa')->table('items')
            ->where('owner_id','=',$request['destinatario'])
            ->where('item_id','=',3509)
            ->update(['count' => $item->count + $request['cantidad']]);
            Alert::success('Success', 'Alex Coins transferidos correctamente');
         }

        //cargue el log
         $character = DB::connection('externa')->table('characters')->where('obj_Id','=',$request['destinatario'])->first();
         $log = new web_donaciones_transferencia;
         $log->cantidad = $request['cantidad'];
         $log->pj = $character->char_name;
         $log->save();


        return Redirect::to('/transferir-coin');
    }




    public function TransferirCoinCuenta(TransferirCoinCuentaRequest $request)
    {   

            $user = User::find(Auth::user()->id);

            //comprobar saldo suficiente
            if ($request['cantidad'] > $user->saldo) {
                flash('saldo Insuficiente.')->error();
                return Redirect::to('/transferir-coin');
            }else{
                $user->saldo = $user->saldo - $request['cantidad'];
                $user->save();
            }
            

            $destinatario = User::where('email','=',$request['email'])->first();

            //comprobar que el email exista
            if (empty($destinatario)) {
                flash('el Email Ingresado no corresponde a ninguna cuenta asociada.')->error();
                return Redirect::to('/transferir-coin');
            }else{
                $destinatario->saldo = $destinatario->saldo + $request['cantidad'];
                $destinatario->save();
                Alert::success('Success', 'Coins transferidos correctamente');
            }   
        
        //cargue el log
         $log = new web_donaciones_transferencia;
         $log->cantidad = $request['cantidad'];
         $log->email = $user->email;
         $log->save();

        return Redirect::to('/transferir-coin');
    }








    public function TransferenciasRealizadas(){
            //traigo el log de las transferencias
            $transferenciasPlayers = web_donaciones_transferencia::where('pj','!=',"")->orderBy('created_at', 'des')->get();
            $transferenciasCuentas = web_donaciones_transferencia::where('email','!=',"")->get();

            $link =  "Donaciones / Transferecnias / Realizadas";
            return view ('lineage.admin.donaciones.transferencias-realizadas',compact('transferenciasPlayers','transferenciasCuentas','link'));
    }






    public function destroy($id)
    {
       $donacion = web_donacione::find($id);
        $donacion->delete();
         Alert::success('Success', 'Donacion Eliminada Correctamente ');
         return Redirect::back();
    }





    public function destroyMyDonacion($id)
    {
       
        $donacion = web_donacione::find($id);
       //para comprobar que la donacion sea del que esta logueado
       if ($donacion->account == Auth::user()->login) {
          $donacion->delete();
       }
      

        Alert::success('Success', 'Donacion Eliminada Correctamente ');
         return Redirect::back();
    }
}
