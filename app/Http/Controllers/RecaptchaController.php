<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;

use Soft\Recaptcha;
use Alert;
use Session;
use Redirect;
use Storage;
use DB;
use Image;


class RecaptchaController extends AdminBaseController
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
        $Recaptcha = new Recaptcha;
        $Recaptcha->private_key = $request['private_key'];
        $Recaptcha->public_key = $request['public_key'];
        $Recaptcha->save();
        
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
        $Recaptcha=Recaptcha::find($id);
        $Recaptcha->fill($request->all());
        $Recaptcha->save();

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
