<?php
namespace Soft\Http\Controllers;
use Illuminate\Http\Request;
use Soft\Http\Requests;


use Soft\web_email;

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

class ConfigEmailController extends AdminBaseController
{
    public function store(Request $request)
    {
       $email = new web_email;
        $email->email = $request['email'];
        $email->email = $request['password'];
         $email->email = $request['nombre'];
        $email->save();
        
        //le manda un mensaje al usuario
       Alert::success('Mensaje existoso', 'Inforamcion Guardadas');
       return Redirect::back();
    }


    
    public function update(Request $request, $id)
    {
         $email=web_email::find($id);
        $email->fill($request->all());
        $email->save();

        //le manda un mensaje al usuario
       Alert::success('Mensaje existoso', 'Inforamcion Modificada');
       return Redirect::back();
    }

 
    public function destroy($id)
    {
        //
    }
}
