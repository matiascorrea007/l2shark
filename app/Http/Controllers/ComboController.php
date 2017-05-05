<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;
use Soft\web_conexion;
use Soft\web_categoria;
use Soft\web_producto_combo;
use Soft\web_producto;
use Config;
use DB;
use Alert;
use Session;
use Redirect;
use Storage;
use Image;
use Auth;
use Flash;
use Input;


class ComboController extends Controller
{
     public function __construct()
    {
        /*si no existe mi session items , esntonces la creo con put y creo
        un array para almacenar los items*/
        if(!\Session::has('items')) \Session::put('items', array());
        
    }






    //si no se utilizaria ajax , esta funcio realiza la busqueda y la pagina
    public function SearchItem(Request $request)
    {
        //buscamos por nombre
        $nombre = $request->input('nombre');
        //busqueda por id
        $id=$request->input('id');


        //si no selecciono ningun tipo que me tire error
        if ($request['type'] == "") {
           
           flash('Debe seleccionar un tipo de Categoria!!.')->error();
        }
        


        if ($request['type'] == "armor") {

            if (!empty($id)) {
             $alls = DB::table('armor')->where('item_id','LIKE','%'.$id.'%')->paginate(30);
            //entonces me busque de usu_nombre a el nombre que le pasamos atraves de $usu_nombre 
            }

             if (!empty($nombre)) {

             $alls = DB::table('armor')->where('name','LIKE','%'.$nombre.'%')->paginate(30);
            //entonces me busque de usu_nombre a el nombre que le pasamos atraves de $usu_nombre 
            }

            if (empty($id) and empty($nombre)) {
                //si los dos son vacio que me traiga todos los custom_armor
                $alls = DB::table('custom_armor')->paginate(30);
            }
                  
        }






        if ($request['type'] == "weapon") {

            if (!empty($id)) {
             $alls = DB::table('weapon')->where('item_id','LIKE','%'.$id.'%')->paginate(30);
            //entonces me busque de usu_nombre a el nombre que le pasamos atraves de $usu_nombre 
            }

             if (!empty($nombre)) {
             $alls = DB::table('weapon')->where('name','LIKE','%'.$nombre.'%')->paginate(30);
            //entonces me busque de usu_nombre a el nombre que le pasamos atraves de $usu_nombre 
            }

           if (empty($id) and empty($nombre)) {
                //si los dos son vacio que me traiga todos los weapon
                $alls = DB::table('weapon')->paginate(30);
            }

            
        }
        





        if ($request['type'] == "custom armor") {

            if (!empty($id)) {
             $alls = DB::table('custom_armor')->where('item_id','LIKE','%'.$id.'%')->paginate(30);
            //entonces me busque de usu_nombre a el nombre que le pasamos atraves de $usu_nombre 
            }

             if (!empty($nombre)) {
             $alls = DB::table('custom_armor')->where('name','LIKE','%'.$nombre.'%')->paginate(30);
            //entonces me busque de usu_nombre a el nombre que le pasamos atraves de $usu_nombre 
            }

            if (empty($id) and empty($nombre)) {
                //si los dos son vacio que me traiga todos los custom_armor
                $alls = DB::table('custom_armor')->paginate(30);
            }

            
        }





        if ($request['type'] == "custom weapon") {

            if (!empty($id)) {
             $alls = DB::table('custom_weapon')->where('item_id','LIKE','%'.$id.'%')->paginate(30);
            //entonces me busque de usu_nombre a el nombre que le pasamos atraves de $usu_nombre 
            }

             if (!empty($nombre)) {
             $alls = DB::table('custom_weapon')->where('name','LIKE','%'.$nombre.'%')->paginate(30);
            //entonces me busque de usu_nombre a el nombre que le pasamos atraves de $usu_nombre 
            }

            if (empty($id) and empty($nombre)) {
                //si los dos son vacio que me traiga todos los custom_weapon
                $alls = DB::table('custom_weapon')->paginate(30);
            }

            
        }
       




        if ($request['type'] == "items") {

            if (!empty($id)) {
             $alls = DB::table('etcitem')->where('item_id','LIKE','%'.$id.'%')->paginate(30);
            //entonces me busque de usu_nombre a el nombre que le pasamos atraves de $usu_nombre 
            }

             if (!empty($nombre)) {
             $alls = DB::table('etcitem')->where('name','LIKE','%'.$nombre.'%')->paginate(30);
            //entonces me busque de usu_nombre a el nombre que le pasamos atraves de $usu_nombre 
            }

            if (empty($id) and empty($nombre)) {
                //si los dos son vacio que me traiga todos los etcitem
                $alls = DB::table('etcitem')->paginate(30);
            }
           
        }

        $cart = \Session::get('items');
         return view ('lineage.admin.shop.crear-combo',compact('alls','cart'));
    }




    
     public function ComboItemAdd(Request $request,$id)
    {
         //si es una peticion ajax
        if ($request->ajax()) {
            
             $etcitem = DB::table('etcitem')->where('item_id','=',$id)->get();
             $armors = DB::table('armor')->where('item_id','=',$id)->get();
             $weapons = DB::table('weapon')->where('item_id','=',$id)->get();
             $cw = DB::table('custom_weapon')->where('item_id','=',$id)->get();
             $ca = DB::table('custom_armor')->where('item_id','=',$id)->get();
             //unimos los array
             $alls = array_merge($etcitem,$armors,$weapons,$cw,$ca);

            $itemadds  = $alls;

            $cart = \Session::get('items');
            foreach ($itemadds as $key => $itemadd) {
               $cart[] = $itemadd;        
            }
            \Session::put('items', $cart);

            //cargo de nuevo la session para traer los items anterior y recien la mando
            $cart = \Session::get('items');

            return response($cart);
        }

    }


    public function ComboItemTrash(Request $request)
    {
        \Session::forget('items');
        flash('Items del Combo Eliminados.')->success();
        return Redirect::back();
    }



    public function SearchId(Request $request,$id)
    {
         //si es una peticion ajax
        if ($request->ajax()) {
                
                //por id
             $etcitem = DB::table('etcitem')->where('item_id','LIKE',$id)->get();
             $armors = DB::table('armor')->where('item_id','LIKE',$id)->get();
             $weapons = DB::table('weapon')->where('item_id','LIKE',$id)->get();
             $cw = DB::table('custom_weapon')->where('item_id','LIKE',$id)->get();
             $ca = DB::table('custom_armor')->where('item_id','LIKE',$id)->get();
            

             //unimos los array
             $alls = array_merge($etcitem,$armors,$weapons,$cw,$ca);

            

            return response($alls);
        }

    }


    public function SearchNombre(Request $request,$nombre)
    {
         //si es una peticion ajax
        if ($request->ajax()) {
                
             //por nombre
             $etcitem = DB::table('etcitem')->where('name','LIKE',$nombre.'%')->get();
             $armors = DB::table('armor')->where('item_id','>',8000)->where('name','LIKE',$nombre.'%')->get();
             $weapons = DB::table('weapon')->where('item_id','>',9000)->where('name','LIKE',$nombre.'%')->get();
             $cw = DB::table('custom_weapon')->where('name','LIKE',$nombre.'%')->get();
             $ca = DB::table('custom_armor')->where('name','LIKE',$nombre.'%')->get();
            

             //unimos los array
             $alls = array_merge($etcitem,$armors,$weapons,$cw,$ca);

            

            return response($alls);
        }

    }

    






    public function index(Request $request)
    {      
        $combos = web_producto_combo::all();
        $categorias = web_categoria::all();
         return view ('lineage.admin.shop.index',compact('categorias','combos'));
    }


    public function Combocreate()
    {       

        //\Session::forget('items');
        //$cart = \Session::get('items');
        //dd($cart);
        $categorias = web_categoria::all();
    flash('Seleccione una Categoria para la Busqueda.')->success();
    return view ('lineage.admin.shop.crear-combo',compact('categorias'));
    }


    

    public function Combostore(Request $request)
    {   

        dd($request);
       
        
        $categoria = web_categoria::find($request['categoria_id']);
       
        //carpeta
         $nombreCombo = $request['nombre'];
        $directory = "combos/".$categoria->nombre."/".$nombreCombo;

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
            $filename = "sin-foto.jpg";
        }


        if(empty($request->hasFile('imagen'))){
            $ruta = "sin-foto.jpg"; 
        }else{
            $ruta = 'storage/'.$directory.'/'. $filename;
        }

    

         $productoCombo = web_producto_combo::create([
           'nombre'=>$request['nombre'],
           'ruta'=>$ruta,
           'imagen'=>$filename,
           'web_categoria_id'=>$request['categoria_id'],
            ]);



         $cart = \Session::get('items');

          foreach ($cart as $item) {
            //crea una nueva transaccion
            $producto  = new web_producto();
            $producto->item_id    = $item->item_id;
            $producto->nombre    = $item->name;
            $producto->web_combo_id    = $productoCombo->id;
            $producto->imagen    = "sin-foto.jpg"; 
            $producto->save();

        }   


        //limpiamos el carrito
        \Session::forget('items');

        Alert::success('Success', 'Combo Creado ');
         return Redirect::to('/combo');
    
    }

    
    public function ComboVer($id)
    {   
        $combo = web_producto_combo::find($id);
        $productos = web_producto::where('web_combo_id','=',$id)->get();
         return view ('lineage.admin.shop.ver',compact('productos','combo'));
        
    }

    
    public function ComboUpdateNombre(Request $request,$idcombo)
    {
        //
    }

    
    public function ComboUpdateImagen(Request $request,$idcombo)
    {   
        $combo = web_producto_combo::find($idcombo);
        $productos = web_producto::where('web_combo_id','=',$idcombo)->get();


         $categoria = web_categoria::find($combo->web_categoria_id);
        //carpeta
        $nombreCombo = $combo->nombre;
        $directory = "combos/".$categoria->nombre."/".$nombreCombo;

        foreach ($productos as  $producto) {
        //pregunto si la imagen no es vacia y guado en $filename , caso contrario guardo null
        if(!empty($request->hasFile('imagen'.$producto->item_id))){
          $imagen = Input::file('imagen'.$producto->item_id);
            $filename=time() . '.' . $imagen->getClientOriginalExtension();
            
            //esto es para q funcione en local 
            //image::make($imagen->getRealPath())->save( public_path('storage/'.$directory.'/'. $filename));
            image::make($imagen->getRealPath())->save('storage/'.$directory.'/'. $filename);
        }elseif(empty($request->hasFile('imagen'.$producto->item_id))){
            //crea la carpeta
            Storage::makeDirectory($directory);
            $filename = "sin-foto.jpg";
        }


        if(empty($request->hasFile('imagen'.$producto->item_id))){
            $ruta = "sin-foto.jpg"; 
        }else{
            $ruta = 'storage/'.$directory.'/'. $filename;
        }

                $producto->imagen = $filename;
                $producto->ruta = $ruta;
                $producto->save();
        }
       
       flash('Imagenes Agregada Corractamente.')->success();
        return Redirect::back();
        
    }

    
    public function destroy($id)
    {
        //
    }







}
