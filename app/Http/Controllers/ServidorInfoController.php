<?php

namespace Soft\Http\Controllers;
use Illuminate\Http\Request;
use Soft\Http\Requests;

use Soft\web_serverinfo;

use Alert;
use Session;
use Redirect;
use Storage;
use DB;
use Image;
use Auth;
use Flash;
use Toastr;
use Carbon\Carbon;
use Exception;
use MP;
use Input;


class ServidorInfoController extends AdminBaseController
{
     public function store(Request $request)
    {
       $servidor = new web_serverinfo;
        $servidor->nombre = $request['nombre'];
        $servidor->cronica = $request['cronica'];
        $servidor->save();
        
        //le manda un mensaje al usuario
       Alert::success('Mensaje existoso', 'Inforamcion Guardadas');
       return Redirect::back();
    }


    
    public function update(Request $request, $id)
    {
         $servidor=web_serverinfo::find($id);
        $servidor->fill($request->all());
        $servidor->save();

        //le manda un mensaje al usuario
       Alert::success('Mensaje existoso', 'Inforamcion Modificada');
       return Redirect::back();
    }

 
    public function destroy($id)
    {
        //
    }
}
