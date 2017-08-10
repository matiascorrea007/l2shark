<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;

use Soft\web_conexion;
use Soft\Cronica;
use Soft\Serverpack;

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

class DbController extends AdminBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
            $cronicas = Cronica::lists('descripcion', 'id');
            $serverpacks = Serverpack::lists('descripcion', 'id');
            $db = web_conexion::first();
            $link =  "Configuracion / DB";
            return view ('lineage.admin.db.index',compact('db','link','cronicas','serverpacks'));
        

    }


    public function ProbarConexion()
    {  

        $cronicas = Cronica::lists('descripcion', 'id');
        $serverpacks = Serverpack::lists('descripcion', 'id');

       try
        {
            //comprueba la conexion
            DB::connection('externa')->getPdo();
            flash('la conexion a la BD se realizo Correctamente.')->success();
        }
            //en caso de una exepcion
        catch(\PDOException $e)
        {
           

             flash('no se puedo realizar la conexion a la Base de Datos     .'.$e->getMessage())->error();
            
        }

        $db = web_conexion::first();
        return view ('lineage.admin.db.index',compact('db','cronicas','serverpacks'));


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
        $conexion->cronica_id = $request['cronica_id'];
        $conexion->serverpack_id = $request['serverpack_id'];
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
        $conexion->cronica_id = $request['cronica_id'];
        $conexion->serverpack_id = $request['serverpack_id'];
        $conexion->save();
        Alert::success('Mensaje existoso', 'Datos Modificados Con Exito');
        return Redirect::to('/db-config');
    }

}
