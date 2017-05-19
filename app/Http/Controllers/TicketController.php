<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;
use Soft\Http\Requests\TicketCreateRequest;
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
use Soft\web_tickets_prioritie;
use Soft\web_tickets_categorie;
use Auth;

class TicketController extends AdminBaseController
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

        return view('lineage.admin.ticket.admin-ticket',compact('link','count','tickets')); 
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


     public function TicketResponder(Request $Request , $id){
        $comentarios = web_tickets_comment::where('ticket_id','=',$id)->get();
        $ticket= web_ticket::find($id);
        $link = "ticket";
        return view('lineage.admin.ticket.admin-responder',compact('link','ticket','comentarios')); 
    } 


    public function TicketComentario(Request $Request , $id){

        $comentario = new web_tickets_comment;
        $comentario->comment = $Request['comentario'];
        $comentario->user_id = Auth::user()->id;
        $comentario->ticket_id = $id;
        $comentario->save();

       return Redirect::back();
    }



    public function TicketCambiarStatus(Request $Request , $id){

        $ticket=web_ticket::find($id);
        $ticket->status_id=$Request['pago'];
        $ticket->save();
         return Redirect::back();
    }




    /*------------------------usuario-----------------------*/


    public function UserTicket(){

        //datos de facturacion
        $tickets =  web_ticket::where( 'user_id', '=',Auth::user()->id)->orderBy('created_at', 'des')->paginate(10);
        $prioridades  = web_tickets_prioritie::lists('nombre', 'id');
        $category  = web_tickets_categorie::lists('nombre', 'id');

        return view('lineage.admin.ticket.user-ticket',compact('category','prioridades','tickets'));

    }



     
    public function UserTicketResponder($id){

        //datos de facturacion
        $ticket =  web_ticket::find($id);
        $comentarios = web_tickets_comment::where('ticket_id','=',$id)->get();

        return view('lineage.admin.ticket.user-ticket-responder',compact(
            'comentarios',
            'ticket',
            'categorias'));

    }


    

    public function UserTicketComentario(request $request ,$id){
        
        $comentario = new web_tickets_comment;
        $comentario->comment = $request['comentario'];
        $comentario->user_id = Auth::user()->id;
        $comentario->ticket_id = $id;
        $comentario->save();

        Session::flash('message','Mensaje enviado');
        return Redirect::back();

        }


    
        public function UserTicketCrear(TicketCreateRequest $request)
        {

        $ticket = new web_ticket;
        $ticket->subject = $request['subject'];
        $ticket->content = $request['comentario'];
        $ticket->priority_id = $request['prioridad'];
        $ticket->status_id = 2;
        $ticket->user_id = Auth::user()->id;
        $ticket->agent_id = null;
        $ticket->category_id = $request['categoria'];
        $ticket->save();

        Session::flash('message','Ticket Creado');
        return Redirect::to('/mis-ticket');

        }

}
