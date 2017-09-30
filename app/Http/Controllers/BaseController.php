<?php

namespace Soft\Http\Controllers;
use Illuminate\Http\Request;
use Soft\Http\Requests;

use Soft\web_facebook;
use Soft\web_logo;
use Soft\web_voto;
use Soft\web_video;
use Soft\web_imagene;
use Soft\web_skin;
use Soft\web_serverinfo;
use Soft\web_conexion;

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
use View;
use Route;


class BaseController extends Controller
{
  


   public function __construct() {

       //datos de la plantilla principal
       
       
       try
        {
            $pvps = DB::connection('externa')->table('characters')->orderBy('pvpkills', 'des')->paginate(10);
            $pks = DB::connection('externa')->table('characters')->orderBy('pkkills', 'des')->paginate(10);
        }
        catch(\PDOException $e)
        {
            $pvps = null;
            $pks = null;
             flash('no se puedo realizar la conexion a la BD.')->error();
            
        }

      
      $logo=web_logo::first();
      $box=web_facebook::first();
      $votos=web_voto::all();
      $user = Auth::user();
      $imagenes = web_imagene::where('visible','=',1)->take(4)->orderBy('id','asc')->get();
      $videos = web_video::where('visible','=',1)->take(4)->orderBy('id','asc')->get();
      $servidor=web_serverinfo::first();
      $conexion=web_conexion::first();
      $ip = $conexion->host;



       
      //datos de la plantilla principal

       View::share ( 'pvps', $pvps );
       View::share ( 'pks', $pks );
       View::share ( 'logo', $logo );
       View::share ( 'box', $box );
       View::share ( 'user', $user );
       View::share ( 'votos', $votos );
       View::share ( 'imagenes', $imagenes );
       View::share ( 'videos', $videos );
       View::share ( 'servidor', $servidor );
       View::share ( 'ip', $ip );
       

    }  

  
}
