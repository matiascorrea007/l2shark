<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;
use Alert;
use Session;
use Redirect;
use Storage;
use DB;
use Image;
use View;
use Auth;
use Soft\web_facebook;
use Soft\web_logo;
use Soft\web_voto;

class BaseController extends Controller
{
  


   public function __construct() {

       //datos de la plantilla principal
      $pvps = DB::table('characters')->orderBy('pvpkills', 'des')->paginate(5);
      $pks = DB::table('characters')->orderBy('pkkills', 'des')->paginate(5);
      $logo=web_logo::first();
      $box=web_facebook::first();
      $votos=web_voto::all();
      $user = Auth::user();
      //datos de la plantilla principal


       View::share ( 'pvps', $pvps );
       View::share ( 'pks', $pks );
       View::share ( 'logo', $logo );
       View::share ( 'box', $box );
       View::share ( 'user', $user );
       View::share ( 'votos', $votos );
      

    }  

  
}
