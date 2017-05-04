<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;

use Soft\web_conexion;
use Soft\web_categoria;
use Config;
use DB;
use Alert;
use Session;
use Redirect;
use Storage;
use Image;
use Auth;
use Flash;


class ShopController extends Controller
{
     public function __construct()
    {
        /*si no existe mi session items , esntonces la creo con put y creo
        un array para almacenar los items*/
        if(!\Session::has('items')) \Session::put('items', array());
        
    }







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














    public function index(Request $request)
    {   
        $categorias = web_categoria::all();
         return view ('lineage.admin.shop.index',compact('categorias'));
    }

    
    


    public function Combocreate()
    {       
    
           
        
    
    flash('Seleccione una Categoria para la Busqueda.')->success();
    return view ('lineage.admin.shop.crear-combo');
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


     public function ComboItemDelete(Request $request,$id)
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
              unset($cart[]);  
            }
            \Session::put('items', $cart);

            //cargo de nuevo la session para traer los items anterior y recien la mando
            $cart = \Session::get('items');

            return response($cart);
        }
}

     //agregar item
    public function add($id)
    {
        $itemadd  = producto::find($id);
        $cart = \Session::get('cartweb');
        $itemadd->quantity = 1;
        $cart[$itemadd->descripcion] = $itemadd;
        \Session::put('cartweb', $cart);
       
        return Redirect::back();

     }

     // Delete item y client
    public function delete($id)
    {
        $item  = producto::find($id);
        $cart = \Session::get('cartweb');
        unset($cart[$item->descripcion]);
        \Session::put('cartweb', $cart);
        return Redirect::back();
    }


     // Update item
    public function update($id, $quantity)
    {
        
        $item  = producto::find($id);
        $cart = \Session::get('cartweb');
        $cart[$item->descripcion]->quantity = $quantity;
        \Session::put('cartweb', $cart);

        return Redirect::to('web-shopping-cart');
       
    }


    //limpiar carrito y cliente
     public function trash()
    {
        \Session::forget('cartweb');
        \Session::forget('cliente');
        
        return Redirect::back();
    }


    //total del carrito
    private function total()
    {
        $cart = \Session::get('cartweb');
        $total = 0;
        foreach($cart as $item){
            $total += $item->precioventa * $item->quantity;
        }
        return $total;
    }



    public function Combostore(Request $request)
    {
        //
    }

    
    public function Comboshow($id)
    {
        //
    }

    
    public function Comboedit($id)
    {
        //
    }

    
    public function Comboupdate(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }




  



     public function Search2(Request $request,$id)
    {
        if ($request->ajax()) {
            
           
             $etcitems = DB::table('etcitem')->where('item_id','<',60)->get();
            
        

            //return response()->json(['etcitems' => $etcitems,]);
            return response($etcitems);
        }
    }

}
