<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;
use Soft\web_conexion;
use Soft\web_categoria;
use Soft\web_producto_combo;
use Soft\web_producto;
use Soft\User;
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


class ComboController extends AdminBaseController
{
     public function __construct()
    {
         parent::__construct();
        /*si no existe mi session items , esntonces la creo con put y creo
        un array para almacenar los items*/
        if(!\Session::has('items')) \Session::put('items', array());
        
    }


   



    //si no se utilizaria ajax , esta funcio realiza la busqueda y la pagina
   /* public function SearchItem(Request $request)
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
    }*/




    
     public function ComboItemAdd(Request $request,$id)
    {
       
         //si es una peticion ajax
        if ($request->ajax()) {
            
             $etcitem = DB::connection('externa')->table('etcitem')->where('item_id','=',$id)->get();
             $armors = DB::connection('externa')->table('armor')->where('item_id','=',$id)->get();
             $weapons = DB::connection('externa')->table('weapon')->where('item_id','=',$id)->get();
             $cw = DB::connection('externa')->table('custom_weapon')->where('item_id','=',$id)->get();
             $ca = DB::connection('externa')->table('custom_armor')->where('item_id','=',$id)->get();
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
             $etcitem = DB::connection('externa')->table('etcitem')->where('item_id','LIKE',$id)->get();
             $armors = DB::connection('externa')->table('armor')->where('item_id','LIKE',$id)->get();
             $weapons = DB::connection('externa')->table('weapon')->where('item_id','LIKE',$id)->get();
             $cw = DB::connection('externa')->table('custom_weapon')->where('item_id','LIKE',$id)->get();
             $ca = DB::connection('externa')->table('custom_armor')->where('item_id','LIKE',$id)->get();
            

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
             $etcitem = DB::connection('externa')->table('etcitem')->where('name','LIKE',$nombre.'%')->get();
             $armors = DB::connection('externa')->table('armor')->where('item_id','>',8000)->where('name','LIKE',$nombre.'%')->get();
             $weapons = DB::connection('externa')->table('weapon')->where('item_id','>',9000)->where('name','LIKE',$nombre.'%')->get();
             $cw = DB::connection('externa')->table('custom_weapon')->where('name','LIKE',$nombre.'%')->get();
             $ca = DB::connection('externa')->table('custom_armor')->where('name','LIKE',$nombre.'%')->get();
            

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
        
    
    try
        {
            //comprueba la conexion
            DB::connection('externa')->getPdo();
        }
            //en caso de una exepcion
        catch(\PDOException $e)
        {
             flash('no se puedo realizar la conexion a la BD.')->error();
        }

        $categorias = web_categoria::all();
    return view ('lineage.admin.shop.crear-combo',compact('categorias'));
    }




    

    public function Combostore(Request $request)
    {   
       
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
        try
        {
             $characters = DB::connection('externa')->table('characters')->where('account_name','=',Auth::user()->login)->paginate(7);
        }
        catch(\PDOException $e)
        {
            $characters = "";
             flash('no se puedo realizar la conexion a la BD.')->error(); 
        }


        $combo = web_producto_combo::find($id);
        $productos = web_producto::where('web_combo_id','=',$id)->get();
         return view ('lineage.admin.shop.ver',compact('productos','combo','characters'));
        
    }

    




    public function ComboEdit(Request $request,$idcombo)
    {   
        $categorias = web_categoria::lists('nombre','id');
        $combo = web_producto_combo::find($idcombo);
        $productos = web_producto::where('web_combo_id','=',$idcombo)->get();
        return view ('lineage.admin.shop.editar-combo',compact('productos','combo','categorias'));
    }




    public function ComboComprar(Request $request)
    {   
        

        //traigo el ultimo item asi le sumo uno al ultimo id
        $ultimoID =collect( DB::connection('externa')->table('items')->get());
        $ultimoID = $ultimoID->pop()->object_id + 1;
       

        $request['destinatario'];
        $request['total'];

        $user = User::find(Auth::user()->id);
        $items = $request->itens;
       
        //comprobamos el saldo
         if ($request['total'] > $user->saldo) {
                flash('saldo Insuficiente.')->error();
                return Redirect::back();    
            }else{
                $user->saldo = $user->saldo - $request['total'];
                $user->save();
            }


        $i = 0;
            foreach ($items as $item) {
                
              //traigo los item 
             $allitems[] = DB::connection('externa')->table('items')->where('owner_id','=',$request['destinatario'])
         ->where('item_id','=',$item)->first();


           //los creo siempre ya que son armor wepons y rings
             DB::connection('externa')->table('items')->insert(
                ['owner_id' => $request['destinatario'], 
                'object_id' => $ultimoID,
                'item_id' => $item,
                'count' => 1,
                'enchant_level' => 0,
                'loc' => "INVENTORY",
                'loc_data' => 0,
                'price_sell' => 0,
                'price_buy' => 0,
                'custom_type1' => 0,
                'custom_type2' => 0,
                'mana_left' => -1,
                ]);


         $i = $i + 1 ;
            }
            
        Alert::success('Success', 'Items transferidos correctamente');
      
        
        return Redirect::to('/combo');
        //return view ('lineage.admin.shop.editar-combo',compact('productos','combo','categorias'));
    }


    public function ComboUpdate(Request $request,$idcombo)
    {
        $combo = web_producto_combo::find($idcombo);
      $categoria = web_categoria::find($request['web_categoria_id']);
       
        //carpeta
         $nombreCombo = $request['nombre'];
        $directory = "combos/".$categoria->nombre."/".$nombreCombo;

         //pregunto si la imagen no es vacia y guado en $filename , caso contrario guardo null
        if(!empty($request->hasFile('imagen'))){

            //eliminamos la imagen anterior    
            if($combo->imagen != "sin-foto.jpg"){
            $directoryDelete = $combo->web_categoria->nombre."/".$combo->nombre."/".$combo->imagen;
            \Storage::disk('combos')->delete($directoryDelete);
            }

          $imagen = Input::file('imagen');
            $filename=time() . '.' . $imagen->getClientOriginalExtension();
            //crea la carpeta
            Storage::makeDirectory($directory);
            //esto es para q funcione en local 
            //image::make($imagen->getRealPath())->save( public_path('storage/'.$directory.'/'. $filename));
            image::make($imagen->getRealPath())->save('storage/'.$directory.'/'. $filename);
        }


        if(!empty($request->hasFile('imagen'))){
            $ruta = 'storage/'.$directory.'/'. $filename;
        }

    

         $productoCombo = web_producto_combo::find($idcombo);
         $productoCombo->nombre = $request['nombre'];
         if (!empty($request['imagen'])) {
            $productoCombo->ruta = $ruta;
             $productoCombo->imagen = $filename;
         }
         
         $productoCombo->web_categoria_id =$request['web_categoria_id'];
         $productoCombo->save();
            


      return Redirect::back()->with('message', 'Modificado Con Exito');
    }







    
    public function ComboUpdateItem(Request $request,$idcombo)
    {   
      
        //traigo el combo
        $combo = web_producto_combo::find($idcombo);
        //traigo los productos del combo
        $productos = web_producto::where('web_combo_id','=',$idcombo)->get();
        //categoria a la cual petrtenece el combo
         $categoria = web_categoria::find($combo->web_categoria_id);
        //carpeta
        $nombreCombo = $combo->nombre;
        $directory = "combos/".$categoria->nombre."/".$nombreCombo;


        foreach ($productos as  $producto) {
        //pregunto si la imagen no es vacia y guado en $filename , caso contrario guardo null
        if(!empty($request->hasFile('imagen'.$producto->id))  ){

            //eliminamos la imagen anterior    
            if($producto->imagen != "sin-foto.jpg"){
            $directoryDelete = $categoria->nombre."/".$nombreCombo."/".$producto->imagen;
            \Storage::disk('combos')->delete($directoryDelete);
            }

            $imagen = Input::file('imagen'.$producto->id);
            $filename=time() . '.' . $imagen->getClientOriginalName();

            //esto es para q funcione en local 
            //image::make($imagen->getRealPath())->save( public_path('storage/'.$directory.'/'. $filename));
            image::make($imagen->getRealPath())->save('storage/'.$directory.'/'. $filename);

            $ruta = 'storage/'.$directory.'/'. $filename;
            $producto->imagen = $filename;
            $producto->ruta = $ruta;
            $producto->save();
        }

        if ($request['precio'.$producto->id] != 0) {
            $producto->precio = $request['precio'.$producto->id];
            $producto->save();
        }
  
        }
       
     
        return Redirect::back()->with('message', 'Modificado Con Exito');
        
    }





    
    public function Combodestroy($id)
    {   
        $combo = web_producto_combo::find($id);
        $productos = web_producto::where('web_combo_id' ,'=',$combo->id)->get();

        foreach ($productos as $producto) {
            //eliminamos la imagen de los items
            if($producto->imagen != "sin-foto.jpg"){
        $directoryItemDelete = $combo->web_categoria->nombre."/".$combo->nombre."/".$producto->imagen;
         \Storage::disk('combos')->delete($directoryItemDelete);
        }
        //elimino el item
        $producto->delete();
        }

        //elimino la imagen del combo
        if($combo->imagen1 != "sin-foto.jpg"){
        $directoryComboDelete = $combo->web_categoria->nombre."/".$combo->nombre."/".$combo->imagen;
         \Storage::disk('combos')->delete($directoryComboDelete);
        }    
        //elimino el combo
        $combo->delete();
        

         Alert::success('Success', 'Combo Eliminado Correctamente ');
         return Redirect::to('/combo');
    }








}
