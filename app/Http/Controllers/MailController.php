<?php

namespace Soft\Http\Controllers;
use Mail;
use Redirect;
use Session;
use Illuminate\Http\Request;
use Alert;
use DB;
use Soft\Http\Requests;
use Soft\User;
use Newsletter;
use Input;



class MailController extends Controller
{

      public function __construct()
    {
        /*si no existe mi session cart , esntonces la creo con put y creo
        un array para almacenar los items*/
        if(!\Session::has('cartweb')) \Session::put('cartweb', array());
        //para cliente ya no es un array ya que almaceno 1 solo objeto
        if(!\Session::has('cliente')) \Session::put('cliente');
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


  public function CartCount(){
        /*obtengo mi variable de session cart que cree y la almaceno en $cart */
        $cart = \Session::get('cartweb');
        //cuenta los item que hay en la session
        $cartcount =  count($cart);

        return $cartcount;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function subscribirse(Request $request)
    {

        $listID = 'a7550a8572';//id de la lista en mi cuenta de mailchimp
       
       Newsletter::subscribe('rincewind@discworld.com', ['firstName'=>'Rince', 'lastName'=>'Wind']);
      
     
        
        Session::flash('message','mensjae enviado correctamente');
        return Redirect::to('/contacto');
    }



    public function newsletter(Request $request)
    {

        $link = "newsletter";
       return view('admin.newlester.index',compact('link'));
    }



    public function newsletterEnviar(Request $request)
    {
     $link = "newsletter";
      //guarda el valor de los campos enviados desde el form en un array
       $mensaje = $request['mensaje'];
        $asunto = $request['asunto'];

        $users=User::all();
      //el chunk es para enviar de a 200 user y no saturar la memoria
       // User::chunk(100,function($users){
         foreach ($users as $user) {
          Mail::send('emails.newsletter',['user'=>$user,'mensaje'=>$mensaje],function($message) use ($user,$mensaje,$asunto){
            $message->from('ventas@sharkinformatica.com','Administrador');
            $message->to($user->email , $user->nombre)->subject($asunto);

          });
        }

        // });

        Alert::success('Mensaje existoso', 'Emails Enviados');
         return view('admin.newlester.index',compact('link'));
    }




    public function send(Request $request)
   {
    //llama a la funcion CartTotal
        $cartcount = $this->CartCount();
        //llama a la funcion total
        $total = $this->total();

        $subcategorias = DB::table('categoriasubs')->orderBy('nombre', 'asc')->get();
         $categorias = DB::table('categorias')->orderBy('nombre', 'asc')->get();
        $carrucels =  DB::table('web_carrucels')->orderBy('imagen', 'asc')->get();
        $carrucelMarcas =  DB::table('web_marcas')->orderBy('imagen', 'asc')->get();
        $informacions =  DB::table('web_informacions')->orderBy('direccion1', 'asc')->get();
        $boxs =  DB::table('web_facebooks')->orderBy('box', 'asc')->get();
        $logos =  DB::table('web_logos')->orderBy('logo', 'asc')->get();
         
        


       //guarda el valor de los campos enviados desde el form en un array
       $data = $request->all();
        
       //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
       \Mail::send('emails.email', $data, function($message) use ($request)
       {
           //remitente
           $message->from($request->email, $request->nombre , $request->apellido);
 
           //asunto
           $message->subject($request->subject);
 
           //receptor
           $message->to(env('CONTACT_MAIL'), env('CONTACT_NAME'));
 
       });

       Session::flash('message','mensjae enviado correctamente');
        return view ('shop.contacto',compact('cartcount',
                                          'categorias',
                                          'subcategorias',
                                          'carrucels',
                                          'carrucelMarcas',
                                          'informacions',
                                          'boxs',
                                          'logos',
                                          'total'
                                          ));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
