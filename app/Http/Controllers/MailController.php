<?php
namespace Soft\Http\Controllers;
use Illuminate\Http\Request;
use Soft\Http\Requests;

use Soft\User;
use Soft\web_email;

use Newsletter;
use Mail;
use Alert;
use Session;
use Redirect;
use Storage;
use DB;
use Image;
use Auth;
use Flash;
use Toastr;
use Carbon\Carbon;
use Exception;
use MP;
use Input;
use View;



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


     $email = web_email::first();
     
      //guarda el valor de los campos enviados desde el form en un array
       $data = $request->all();


    \Mail::send('emails.email', $data, function($message) use ($request,$email)
       {
           //remitente
          $message->from($request->email);
 
           //asunto
           $message->subject($request->titulo);
 
           //receptor
           $message->to($email->email, $email->nombre);
 
       });


       Session::flash('message','mensjae enviado correctamente');
        return Redirect::to('/');
   }
   


}
