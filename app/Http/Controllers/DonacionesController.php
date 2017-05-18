<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;
use Soft\Http\Requests\TransferirCoinCuentaRequest;
use Soft\Http\Requests\TransferirCoinPlayerRequest;
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
use Soft\web_donacione;
use Soft\User;
class DonacionesController extends AdminBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('lineage.admin.donaciones.donar');
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

     $mp = new MP("202272916517685", "LDi7fuJAGEX1MOtp27ufQr2kt64Jvu0q");

       
    $preference_data = array(
    "items" => array(
        array(
            "id" => "Code",
            "title" => "Linegae 2",
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
        "success" => "http://sharkinformatica.com",
        "failure" => "http://sharkinformatica.com",
        "pending" => "http://sharkinformatica.com"
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

        return view ('lineage.admin.donaciones.donaciones-listar',compact('donaciones'));
    }



    public function hechas()
    {
        $donaciones = web_donacione::where('account','=',Auth::user()->login)->orderBy('created_at','des')->get();

        return view ('lineage.admin.donaciones.donaciones-hechas',compact('donaciones'));
    }


    public function pendientes()
    {
        $donaciones = web_donacione::where('status','=',"pendiente")->orderBy('created_at','des')->get();

        return view ('lineage.admin.donaciones.donaciones-pendientes',compact('donaciones'));
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


        $donaciones = web_donacione::where('status','=',"pendiente")->orderBy('created_at','des')->get();

        return view ('lineage.admin.donaciones.donaciones-transferir',compact('characters'));
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
        
            
        return Redirect::to('/transferir-coin');
    }








    public function destroy($id)
    {
       $donacion = web_donacione::find($id);
        $donacion->delete();
         Alert::success('Success', 'Donacion Eliminada Correctamente ');
         return Redirect::to('/donaciones-hechas');
    }





    public function destroyMyDonacion($id)
    {
       
        $donacion = web_donacione::find($id);
       //para comprobar que la donacion sea del que esta logueado
       if ($donacion->account == Auth::user()->login) {
          $donacion->delete();
       }
      

        Alert::success('Success', 'Donacion Eliminada Correctamente ');
         return Redirect::to('/donaciones-hechas');
    }
}
