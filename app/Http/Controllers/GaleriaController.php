<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;
use Soft\web_imagene;
use Embed\Embed;
use Soft\web_video;
use Alert;
use Session;
use Redirect;
use Storage;
use DB;
use Image;
use Auth;
use Input;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        return view('lineage.admin.galeria.index'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createImagen()
    {
        //
    }


    public function showImagen()
    {
        $imagenes = web_imagene::paginate(20);
         return view ('lineage.admin.galeria.ver-imagenes',compact('imagenes'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeImagen(Request $request)
    {
        
         //pregunto si la imagen no es vacia y guado en $filename , caso contrario guardo null
        if(!empty($request->hasFile('imagen'))){

            $imagen = Input::file('imagen');
            $filename=time() . '.' . $imagen->getClientOriginalExtension();

            //carpeta
            $nombreCombo = $request['nombre'];
            $directory = "galeria/imagenes/";
            //crea la carpeta
            Storage::makeDirectory($directory);
            //esto es para q funcione en local 
            //image::make($imagen->getRealPath())->save( public_path('storage/'.$directory.'/'. $filename));
            image::make($imagen->getRealPath())->save('storage/'.$directory.'/'. $filename);

             $imagen = web_imagene::create([
          
           'url'=>'storage/'.$directory.'/'. $filename,
           'imagen'=>$filename,
           'visible'=>$request['optionsRadios'],
            ]);

        }elseif(empty($request->hasFile('imagen'))){
            
            return Redirect::back()->with('message-error', 'Seleecione una imagen');
        }



        Alert::success('Success', 'Imagen Enviada');
         return Redirect::to('/galeria');
    
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editImagen($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateImagen(Request $request, $id)
    {
        $imagen = web_imagene::find($id);
        if ($request['visible'] == "0") {
           $imagen->visible = 0;
            $imagen->save();

        }
        if ($request['visible'] == "1") {
            $imagen->visible = 1;
           $imagen->save();
        }


         return Redirect::back()->with('message', 'Modificado Con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyImagen($id)
    {
        $imagen = web_imagene::find($id);
       
        $imagenes = "imagenes";
        $directoryItemDelete = $imagenes."/".$imagen->imagen;
         \Storage::disk('galeria')->delete($directoryItemDelete);
         $imagen->delete();

         Alert::success('Success', 'Imagen Eliminado Correctamente ');
         return Redirect::back();
    }







    public function showVideo()
    {
        $videos = web_video::paginate(20);
         return view ('lineage.admin.galeria.ver-videos',compact('videos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createVideo()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeVideo(Request $request)
    {   
        if ($request['link'] == "") {
             return Redirect::back()->with('message-error', 'Ingrese la URl del Video');
        }
        $info = Embed::create($request['link']);

        $subject = $request['link'];
        $remplace = "embed/";
        $search = 'watch?v=';
        $url =  str_replace (  $search ,  $remplace ,  $subject);

        
         $video = new web_video;
         $video->titulo = $info->title;
         $video->link = $url;
         $video->imagen = $info->image;
         $video->visible = $request['optionsRadios'];
         $video->save();

         Alert::success('Mensaje existoso', 'Video Enviado');
       return Redirect::to('/galeria');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editVideo($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateVideo(Request $request, $id)
    {
         $video = web_video::find($id);
        if ($request['visible'] == "0") {
           $video->visible = 0;
            $video->save();

        }
        if ($request['visible'] == "1") {
            $video->visible = 1;
           $video->save();
        }


         return Redirect::back()->with('message', 'Modificado Con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyVideo($id)
    {
         $video = web_video::find($id);
         $video->delete();

         Alert::success('Success', 'Video Eliminado Correctamente ');
         return Redirect::back();
    }






}
