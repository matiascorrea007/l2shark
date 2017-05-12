<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;

use Soft\web_conexion;
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

class DbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
            $db = web_conexion::first();
            return view ('lineage.admin.db.index',compact('db'));
        
    }


    public function ProbarConexion()
    {  
  
         if(DB::connection('externa')->getDatabaseName() == "")
        {
            $db = web_conexion::first();
            flash('No se pudo realizar la conexion con la Base de Datos')->error();
            return view ('lineage.admin.db.index',compact('db'));
        }else{
            $db = web_conexion::first();
            flash('La Conexion a la Base de Datos se Realizo Correctamente')->success();
            return view ('lineage.admin.db.index',compact('db'));
        }
   

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $conexion = new web_conexion;
        $conexion->host = $request['host'];
        $conexion->user = $request['user'];
        $conexion->db = $request['db'];
        $conexion->password = $request['password'];
        $conexion->save();

         Alert::success('Mensaje existoso', 'Datos Guardados Con Exito');
        return Redirect::to('/db-config');
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
        $conexion =  web_conexion::find($id);
        $conexion->host = $request['host'];
        $conexion->user = $request['user'];
        $conexion->db = $request['db'];
        $conexion->password = $request['password'];
        $conexion->save();
        Alert::success('Mensaje existoso', 'Datos Modificados Con Exito');
        return Redirect::to('/db-config');
    }

}
