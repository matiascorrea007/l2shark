<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;

use Soft\Mercadopago;
use Alert;
use Session;
use Redirect;
use Storage;
use DB;
use Image;


class MercadoPagoController extends AdminBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $mercadopago = new Mercadopago;
        $mercadopago->private_key = $request['private_key'];
        $mercadopago->public_key = $request['public_key'];
        $mercadopago->save();
        
        //le manda un mensaje al usuario
       Alert::success('Mensaje existoso', 'Key guardadas');
       return Redirect::back();
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
         $mercadopago=Mercadopago::find($id);
        $mercadopago->fill($request->all());
        $mercadopago->save();

        //le manda un mensaje al usuario
       Alert::success('Mensaje existoso', 'Key Modificado');
       return Redirect::to('/panel-config');
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
