<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;

use Soft\Http\Requests;
use Soft\Http\Controllers\Controller;
use Soft\User;
use Soft\Publicaciones;
use Soft\TipoPublicaciones;
use Soft\Pais;

class GraficasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function getUltimoDiaMes($elAnio,$elMes) {
     return date("d",(mktime(0,0,0,$elMes+1,1,$elAnio)-1));
    }



    public function registros_mes($anio,$mes)
    {
        $primer_dia=1;
        $ultimo_dia=$this->getUltimoDiaMes($anio,$mes);
        $fecha_inicial=date("Y-m-d H:i:s", strtotime($anio."-".$mes."-".$primer_dia) );
        $fecha_final=date("Y-m-d H:i:s", strtotime($anio."-".$mes."-".$ultimo_dia) );
        $usuarios=User::whereBetween('created_at', [$fecha_inicial,  $fecha_final])->get();
        $ct=count($usuarios);

        for($d=1;$d<=$ultimo_dia;$d++){
            $registros[$d]=0;     
        }

        foreach($usuarios as $usuario){
        $diasel=intval(date("d",strtotime($usuario->created_at) ) );
        $registros[$diasel]++;    
        }

        $data=array("totaldias"=>$ultimo_dia, "registrosdia" =>$registros);
        return   json_encode($data);
    }


    public function total_publicaciones(){
        $tipospublicacion=TipoPublicaciones::all();
        $ctp=count($tipospublicacion);
        $publicaciones=Publicaciones::all();
        $ct =count($publicaciones);
        
        for($i=0;$i<=$ctp-1;$i++){
         $idTP=$tipospublicacion[$i]->id;
         $numerodepubli[$idTP]=0;
        }

        for($i=0;$i<=$ct-1;$i++){
         $idTP=$publicaciones[$i]->idTipopublicacion;
         $numerodepubli[$idTP]++;
           
        }

        $data=array("totaltipos"=>$ctp,"tipos"=>$tipospublicacion, "numerodepubli"=>$numerodepubli);
        return json_encode($data);
    }


    public function index()
    {
        $anio=date("Y");
        $mes=date("m");
        $link="graficas";
        return view("admin.reportes.listado_graficas",compact('anio','mes','link'));
    }


}
