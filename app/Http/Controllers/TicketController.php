<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;
use Session;
use Redirect;
use Storage;
use Alert;
use Image;
use DB;
use Input;
use Soft\web_ticket;
use Soft\web_tickets_comment;
use Auth;

class TicketController extends Controller
{
   
   //con este constructor llamo a las variales que hay en la clase padre que es BaseController
    public function __construct(){
       parent::__construct();
    }

    
    public function index(Request $request)
    {
        //ordenamos por usu_nombre y lo guaramos en $users
        $tickets = web_ticket::where('status_id','=',2)->orderBy('created_at','asc');
        $count = web_ticket::where('status_id','=',2)->count();
        //busqueda por descripccion
        $descripcion=$request->input('descripcion');
        if (!empty($descripcion)) { 
            $tickets->where('subject','LIKE','%'.$descripcion.'%');
        }
        //busqueda por codigo
        $codigo=$request->input('codigo');
        if (!empty($codigo)) {
            $productos->where('codigo','LIKE','%'.$codigo.'%');
        }
        
        $tickets=$tickets->paginate(10);
        $link = "ticket";

        return view('admin.ticket.index',compact('link','count','tickets')); 
    }



    public function TicketCompletados(Request $request)
    {
        //ordenamos por usu_nombre y lo guaramos en $users
        $tickets = web_ticket::where('status_id','=',1)->orderBy('created_at','asc');
        $count = web_ticket::where('status_id','=',1)->count();
        //busqueda por descripccion
        $descripcion=$request->input('descripcion');
        if (!empty($descripcion)) { 
            $tickets->where('subject','LIKE','%'.$descripcion.'%');
        }
        //busqueda por codigo
        $codigo=$request->input('codigo');
        if (!empty($codigo)) {
            $productos->where('codigo','LIKE','%'.$codigo.'%');
        }
        
        $tickets=$tickets->paginate(10);
        $link = "ticket";
        return view('admin.ticket.listar.completados',compact('link','count','tickets')); 
     }




    public function TicketCambiarStatus(Request $Request , $id){

        $ticket=web_ticket::find($id);
        $ticket->status_id=$Request['pago'];
        $ticket->save();
         return Redirect::to('/tickets');
    }
    

     public function TicketResponder(Request $Request , $id){
        $comentarios = web_tickets_comment::where('ticket_id','=',$id)->get();
        $ticket=web_ticket::find($id);
        $link = "ticket";
        return view('admin.ticket.responder',compact('link','ticket','comentarios')); 
    }  


    public function TicketComentario(Request $Request , $id){
        


        $comentario = new web_tickets_comment;
        $comentario->comment = $Request['comentario'];
        $comentario->user_id = Auth::user()->id;
        $comentario->ticket_id = $id;
        $comentario->save();



     
       return Redirect::to('/tickets');
    }



    
}
