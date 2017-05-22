<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;
use Soft\web_post;
use Soft\web_video;
use Soft\web_imagene;
use Soft\web_pagina;
use Alert;
use Session;
use Redirect;
use Storage;
use DB;
use Image;
use Soft\Producto;
use Soft\Producto_Imagen;
use Soft\Categoria;
use Soft\Review;
use Soft\Categoriasub;
use Auth;
use Soft\Models\character;
use Embed\Embed;

class PaginasController extends BaseController 
{

   //con este constructor llamo a las variales que hay en la clase padre que es BaseController
 public function __construct(){
       parent::__construct();
    }


     public function Home(){
        $posts=web_post::orderBy('created_at','desc')->paginate(3);
       // $pago = DB::connection('informatica')->table('marcas')->first();
         return view ('lineage.index',compact('posts'));

    }



    public function Download(){
          $paginas = web_pagina::first();
         return view ('lineage.download',compact('paginas'));

    }

    public function Donaciones(){
          $paginas = web_pagina::first();
         return view ('lineage.donaciones',compact('paginas'));

    }

    public function Reglas(){
          $paginas = web_pagina::first();
         return view ('lineage.reglas',compact('paginas'));

    }

    public function Soporte(){
          $paginas = web_pagina::first();
         return view ('lineage.soporte',compact('paginas'));

    }

    public function Informacion(){
          $paginas = web_pagina::first();
         return view ('lineage.informacion',compact('paginas'));

    }

    public function GaleriaVideos(){
          $AllVideos = web_video::where('visible','=',1)->get();
         return view ('lineage.galeria-videos',compact('AllVideos'));

    }

    public function GaleriaImagenes(){
          $AllImagenes = web_imagene::where('visible','=',1)->get();
         return view ('lineage.galeria-imagenes',compact('AllImagenes'));

    }


    public function demoUsuario(){
          
         return view ('lineage.demoUsuario');

    }

    public function demoAdmin(){
          
         return view ('lineage.demoAdmin');

    }


}
