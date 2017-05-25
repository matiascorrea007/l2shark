<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;
use Soft\web_post;
use Soft\User;
use DB;
use Alert;
use Session;
use Redirect;
use Storage;
use Image;
use Auth;
use Flash;
use Input;
use Soft\web_skin;

class WebPostController extends BaseController
{
    


    //con este constructor llamo a las variales que hay en la clase padre que es BaseController
    public function __construct(){
       parent::__construct();
    }



    public function index()
    {
        $posts=web_post::orderBy('created_at','desc')->paginate(10);
      
        $link = "post";


    return view ('lineage.admin.post.index',compact('link','posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
         $user= User::where('admin', '=','1')->lists('login','id');
        //retorna a una vista que esta en la carpeta usuario y dentro esta create
        return view('lineage.admin.post.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new web_post;
        $post->titulo = $request['titulo'];
        $post->descripcioncorta = $request['descripcioncorta'];
        $post->descripcionlarga = $request['descripcionlarga'];
        $post->user_id = Auth::user()->id;


        //carpeta
         $nombreNoticia = $request['titulo'];
        $directory = "noticias/".$nombreNoticia;

         //pregunto si la imagen no es vacia y guado en $filename , caso contrario guardo null
        if(!empty($request->hasFile('imagen'))){
          $imagen = Input::file('imagen');
            $filename=time() . '.' . $imagen->getClientOriginalExtension();
            //crea la carpeta
            Storage::makeDirectory($directory);
            //esto es para q funcione en local 
            //image::make($imagen->getRealPath())->save( public_path('storage/'.$directory.'/'. $filename));
            image::make($imagen->getRealPath())->save('storage/'.$directory.'/'. $filename);
        }elseif(empty($request->hasFile('imagen'))){
            //crea la carpeta
            Storage::makeDirectory($directory);
            $filename = "noticia.jpg";
        }


        if(empty($request->hasFile('imagen'))){
            $ruta = "storage/noticias/noticia.jpg"; 
        }else{
            $ruta = 'storage/'.$directory.'/'. $filename;
        }

    

         $post->portada = $ruta;
         $post->imagen = $filename;
         $post->save();

        //le manda un mensaje al usuario
       Alert::success('Mensaje existoso', 'Post Creado');
       return Redirect::to('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=web_post::find($id);
        return view('lineage.admin.post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $post=web_post::find($id);
        

         //carpeta
         $nombreNoticia = $post->titulo;
        $directory = "noticias/".$nombreNoticia;

         //pregunto si la imagen no es vacia y guado en $filename , caso contrario guardo null
        if(!empty($request->hasFile('imagen'))){

            //eliminamos la imagen anterior    
            if($post->portada != "storage/noticias/noticia.jpg"){
            $directoryDelete = $post->titulo."/".$post->imagen;
            \Storage::disk('noticias')->delete($directoryDelete);
            }

            $imagen = Input::file('imagen');
            $filename=time() . '.' . $imagen->getClientOriginalExtension();
        
            //esto es para q funcione en local 
            //image::make($imagen->getRealPath())->save( public_path('storage/'.$directory.'/'. $filename));
            image::make($imagen->getRealPath())->save('storage/'.$directory.'/'. $filename);
        }

        if(!empty($request->hasFile('imagen'))){
            $ruta = 'storage/'.$directory.'/'. $filename;
        }

         if (!empty($request['imagen'])) {
            $post->imagen = $filename;
            $post->portada = $ruta;
        }
           
        $post->titulo = $request['titulo'];
        $post->descripcioncorta = $request['descripcioncorta'];
        $post->descripcionlarga = $request['descripcionlarga'];
        $post->user_id = Auth::user()->id;
        $post->save();

        //le manda un mensaje al usuario
       Alert::success('Mensaje existoso', 'Post Modificado');
       return Redirect::to('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=web_Post::find($id);
        $post->delete();
        
        //le manda un mensaje al usuario
        Alert::success('Mensaje existoso', 'Post Eliminado');
        return Redirect::to('/post');
    }



private function skin()
    {
        $skin = web_skin::first();
        return $skin;
    }



    public function postDetalle($id)
    {

        $post=web_post::find($id);

        if ($this->skin()->nombre == "element") {
            return view('lineage.templates.element.noticias',compact('post'));
        }  
        if ($this->skin()->nombre == "tristana") {
            return view ('lineage.templates.tristana.noticias',compact('post'));
        } 


        
    }
}
