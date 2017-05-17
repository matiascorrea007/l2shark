<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;
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

class DonacionesController extends Controller
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
        }else{
            $donacion->status= "pendiente";
        }
        $donacion->save();
         return Redirect::to('/donaciones-pendientes');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
