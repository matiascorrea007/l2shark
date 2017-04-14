<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;
use Soft\Http\Requests\ProvedorCreateRequest;
use Soft\Http\Requests\ProvedorUpdateRequest;

use Soft\Http\Requests;
use Soft\Provedore;
use Session;
use Redirect;
use Alert;


class ProvedoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //ordenamos por usu_nombre y lo guaramos en $users
        $provedores=provedore::orderBy('razonsocial');
        //lo que ingresamos en el buscador lo alamacenamos en $usu_nombre
        $razonsocial=$request->input('razonsocial');
        //preguntamos que si ($usu_nombre no es vacio
        if (!empty($razonsocial)) {
            //entonces me busque de usu_nombre a el nombre que le pasamos atraves de $usu_nombre
            $provedores->where('razonsocial','LIKE','%'.$razonsocial.'%');
        }
        //realizamos la paginacion
        $provedores=$provedores->paginate(10);
        //retorna a una vista que esta en la carpeta usuario y dentro esta index
        //compact es para enviarle informaion a esa vista index , y le mandamos ese users que creamos
        //que contiene toda la informacion
        $link = "provedores";
        return view('admin.provedor.index',compact('link','provedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.provedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProvedorCreateRequest $request)
    {
        Provedore::create($request->all());
        Alert::success('Mensaje existoso', 'Provedor Creado');
        return redirect('/provedor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
/*
        //creamos un $user que va a hacer igual al user que encontremos con la id que recibimos 
        $provedore=provedore::find($id);
        //nos regrasa a la vista en edit que se encuentra en la carpeta usuario a la cual le pasamos el 
        //user correspondiente
        return view('admin.provedor.edit',['provedore'=>$provedore]);*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProvedorUpdateRequest $request, $id)
    {
        //creamos un $user que va a hacer igual al user que encontremos con la id que recibimos 
       $provedore=provedore::find($id);
       $provedore->fill($request->all());
       $provedore->save();

        //le manda un mensaje al usuario
       Alert::success('Mensaje existoso', 'Provedor Modificado');
       return Redirect::to('/provedor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //destruye deacuerdo al id que nos pasaron User::destroy($id); 
        //medoto delete ad , buscamos al user deacuardo a la id que recibimos y hacemos referencia a delete
        $provedore=Provedore::find($id);
        $provedore->delete();
        
        //le manda un mensaje al usuario
        Alert::success('Mensaje existoso', 'Provedor Eliminado');
        return Redirect::to('/provedor');
    }
}
