<?php

namespace Soft\Http\Controllers;
use Illuminate\Http\Request;
use Soft\Http\Requests;

use Soft\web_facebook;
use Soft\web_logo;
use Soft\web_voto;
use Soft\web_video;
use Soft\web_imagene;
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
use View;
use Route;

class AdminBaseController extends Controller
{
     public function __construct() {

       //datos de la plantilla admin
      $user = Auth::user();
        $servidor=web_serverinfo::first();
      
     
    
       
      //datos de la plantilla admin
       View::share ( 'user', $user );    
       View::share ( 'servidor', $servidor );    
      

    }  
}
