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
use Toastr;
use Soft\Producto;
use Soft\Producto_Imagen;
use Soft\Categoria;
use Soft\Review;
use Soft\Categoriasub;
use Auth;
use Soft\Models\character;
use Embed\Embed;
use Soft\web_skin;

class PaginasController extends BaseController 
{

   //con este constructor llamo a las variales que hay en la clase padre que es BaseController
 public function __construct(){
       parent::__construct();
    }


     private function skin()
    {
        $skin = web_skin::first();
        return $skin;
    }



     public function Home(){
        $posts=web_post::orderBy('created_at','desc')->paginate(3);
        

        if ($this->skin()->nombre == "element") {
           return view ('lineage.templates.element.index',compact('posts'));
        }

        if ($this->skin()->nombre == "tristana") {
           return view ('lineage.templates.tristana.index',compact('posts'));
        }

        if ($this->skin()->nombre == "animus") {
           return view ('lineage.templates.animus.index',compact('posts'));
        }
    }



    public function Download(){
          $paginas = web_pagina::first();
          

       if ($this->skin()->nombre == "element") {
            return view ('lineage.templates.element.download',compact('paginas'));
        }
        if ($this->skin()->nombre == "tristana") {
            return view ('lineage.templates.tristana.download',compact('paginas'));
        }
        if ($this->skin()->nombre == "animus") {
           return view ('lineage.templates.animus.download',compact('paginas'));
        }
    }

    public function Donaciones(){
          $paginas = web_pagina::first();
          

       if ($this->skin()->nombre == "element") {
            return view ('lineage.templates.element.donaciones',compact('paginas'));
        }  
        if ($this->skin()->nombre == "tristana") {
            return view ('lineage.templates.tristana.donaciones',compact('paginas'));
        }  

        if ($this->skin()->nombre == "animus") {
           return view ('lineage.templates.animus.donaciones',compact('paginas'));
        }
    }

    public function Reglas(){
          $paginas = web_pagina::first();
          

       if ($this->skin()->nombre == "element") {
            return view ('lineage.templates.element.reglas',compact('paginas'));
        }  
        if ($this->skin()->nombre == "tristana") {
            return view ('lineage.templates.tristana.reglas',compact('paginas'));
        }  

        if ($this->skin()->nombre == "animus") {
           return view ('lineage.templates.animus.reglas',compact('paginas'));
        }
    }

    public function Soporte(){
          $paginas = web_pagina::first();
          

       if ($this->skin()->nombre == "element") {
           return view ('lineage.templates.element.soporte',compact('paginas'));
        }  
        if ($this->skin()->nombre == "tristana") {
           return view ('lineage.templates.tristana.soporte',compact('paginas'));
        }  

        if ($this->skin()->nombre == "animus") {
           return view ('lineage.templates.animus.soporte',compact('paginas'));
        }
    }

    public function Informacion(){
          $paginas = web_pagina::first();
            

       if ($this->skin()->nombre == "element") {
            return view ('lineage.templates.element.informacion',compact('paginas'));
        }  
        if ($this->skin()->nombre == "tristana") {
            return view ('lineage.templates.tristana.informacion',compact('paginas'));
        }  

        if ($this->skin()->nombre == "animus") {
           return view ('lineage.templates.animus.informacion',compact('paginas'));
        }
    }

    public function GaleriaVideos(){
          $AllVideos = web_video::where('visible','=',1)->get();
          

       if ($this->skin()->nombre == "element") {
            return view ('lineage.templates.element.galeria-videos',compact('AllVideos'));
        }  
        if ($this->skin()->nombre == "tristana") {
            return view ('lineage.templates.tristana.galeria-videos',compact('AllVideos'));
        }  

        if ($this->skin()->nombre == "animus") {
           return view ('lineage.templates.animus.galeria-videos',compact('AllVideos'));
        }
    }

    public function GaleriaImagenes(){
          $AllImagenes = web_imagene::where('visible','=',1)->get();
           

       if ($this->skin()->nombre == "element") {
            return view ('lineage.templates.element.galeria-imagenes',compact('AllImagenes'));
        }  
        if ($this->skin()->nombre == "tristana") {
            return view ('lineage.templates.tristana.galeria-imagenes',compact('AllImagenes'));
        } 

        if ($this->skin()->nombre == "animus") {
           return view ('lineage.templates.animus.galeria-imagenes',compact('AllImagenes'));
        }
    }


    public function Registrarse(){
      

       if ($this->skin()->nombre == "element") {
            return view ('lineage.templates.element.registro');
        }  
        if ($this->skin()->nombre == "tristana") {
            return view ('lineage.templates.tristana.registro');
        } 

        if ($this->skin()->nombre == "animus") {
           return view ('lineage.templates.animus.registro');
        }
    }


    public function demoUsuario(){
          
          if (Auth::check()) {
              Auth::logout();
            }
         return view ('lineage.demoUsuario');

    }

    public function demoAdmin(){
          
          if (Auth::check()) {
              Auth::logout();
            }

            
            
         return view ('lineage.demoAdmin');

    }


}
