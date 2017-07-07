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
use Route;
use Soft\web_facebook;
use Soft\web_logo;
use Soft\web_voto;
use Soft\web_video;
use Soft\web_imagene;

class AdminBaseController extends Controller
{
     public function __construct() {

       //datos de la plantilla admin
      $user = Auth::user();

      
     
    
       
      //datos de la plantilla admin
       View::share ( 'user', $user );    
      

    }  
}
