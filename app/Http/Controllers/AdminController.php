<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;
use Soft\web_facebook;
use Soft\web_logo;
use Soft\web_voto;
use Soft\web_pagina;
use Alert;
use Session;
use Redirect;
use Storage;
use DB;
use Image;

class AdminController extends Controller
{
     public function Config()
    {
    $logos=web_logo::all();
    $boxs=web_facebook::all();
    $votos=web_voto::all();

    $link = "footer";
    return view ('lineage.admin.config.index',compact('link','logos','boxs','votos'));
    }



    public function Paginas()
    {
    $paginas=web_pagina::all();


    $link = "footer";
    return view ('lineage.admin.paginas.index',compact('link','paginas'));
    }
}
