<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;
use Alert;
use Session;
use Redirect;
use Storage;
use DB;
use Image;
use View;
use Auth;


class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = DB::table('characters')->where('account_name','=',Auth::user()->login)->paginate(7);
        
        return view ('lineage.admin.servicios.index',compact('characters'));
    }


    public function NickNameColor()
    {

        return view ('lineage.admin.servicios.index');
    }

   
}
