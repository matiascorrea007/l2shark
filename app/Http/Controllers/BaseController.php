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

class BaseController extends Controller
{
  


   public function __construct() {

       //datos de la plantilla principal
      $pvps = DB::table('characters')->orderBy('pvpkills', 'des')->paginate(5);
      $pks = DB::table('characters')->orderBy('pkkills', 'des')->paginate(5);
      //datos de la plantilla principal


       View::share ( 'pvps', $pvps );
       View::share ( 'pks', $pks );

    }  

  
}
