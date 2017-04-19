<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;
use Soft\web_post;
use Alert;
use Session;
use Redirect;
use Storage;
use DB;
use Image;
use Soft\User;
use Auth;
class WebPostController extends BaseController
{
    


    //con este constructor llamo a las variales que hay en la clase padre que es BaseController
 public function __construct(){
       parent::__construct();
    }



    public function index()
    {
        $posts=web_post::orderBy('created_at','desc')->paginate(10);
        $user= User::where('admin', '=',1)->lists('login','id');
        $link = "post";
    return view ('lineage.admin.post.index',compact('link','posts','user'));
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







    public function postDetalle($id)
    {

        $post=web_post::find($id);
        return view('lineage.noticias',compact('post'));
    }
}
