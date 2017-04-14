<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;


use Soft\web_footer;
use Soft\web_informacion;
use Soft\web_facebook;
use Soft\web_logo;
use Soft\web_mercadopago;
use Alert;
use Session;
use Redirect;
use Storage;
use DB;
use Image;
class WebFooterController extends Controller
{
     
    public function ConfigFooter()
    {
    $footers=web_footer::all();
    $informacions=web_informacion::all();
    $boxs=web_facebook::all();
    $mercadopagos=web_mercadopago::all();
    $link = "footer";
    return view ('admin.paginas.home.footer.index',compact('link','footers','informacions','boxs','mercadopagos'));
    }

    
}
