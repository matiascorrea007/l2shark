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


class SiegeController extends BaseController
{
        
    //con este constructor llamo a las variales que hay en la clase padre que es BaseController
    public function __construct(){
       parent::__construct();
    }


    public function siege()
    {
        

        return view ('lineage.siege');
    

    }

   
}
