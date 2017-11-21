<?php

namespace GestionDeRiesgos\Http\Controllers;

use Illuminate\Http\Request;

use GestionDeRiesgos\Http\Requests;
use GestionDeRiesgos\Activo;
use GestionDeRiesgos\Models\Analisis;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;


class ValorarActivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activos=DB::table('activo')->select('idactivo','nombreactivo')->get();
        return view('activo.ValorarActivo',["activos"=>$activos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $activo = new Analisis;
        $disponibilidad=$request->get('disponibilidad');
        $confidencialidad=$request->get('confi');
        $integridad=$request->get('inte');
        $degradacion=$request->get('degra');
        $proba=$request->get('proba');

        $valor=$this->valor($disponibilidad,$confidencialidad,$integridad);
        $degradar=$this->degradacion($degradacion);
        $impacto=$this->impacto($degradar,$valor);
        $probabilidad=$this->probabilidad($proba);
        $riesgo=$this->riesgo($probabilidad,$impacto);

        echo $request->get('idactivo') ;

        $activo->idactivo=$request->get('idactivo');
        $activo->disponibilidad=$disponibilidad;
        $activo->confidencialidad=$confidencialidad;
        $activo->integridad=$integridad;
        $activo->degradacion=$degradar;
        $activo->valoractivo=$valor;
        $activo->impacto=$impacto;
        $activo->riesgo=$riesgo;   
        $activo->probocurrencia=$probabilidad; 
        $activo->save();
        
        return Redirect::to('valorar');
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
    public  function valor($d1,$d2,$d3){
            $valoractivo =$d1+$d2+$d3;
            return $valoractivo;
    }
    public  function impacto($degradacion,$valoractivo){
         $impacto=$degradacion*$valoractivo;
         return $impacto;
    }
    public  function riesgo($probabilidad,$impacto){
            $riesgo=$probabilidad*$impacto;
            return $riesgo;
    }
    public  function degradacion($deg){
        if (($deg>=0)&&($deg<0.01)) {
            return $degradacion=0.01;
        } else {
            if (($deg>=0.01)&&($deg<0.250)) {
                return $degradacion=0.25;
            } else {
                if (($deg>=0.25)&&($deg<0.50)) {
                    return $degradacion=0.50;
                } else {
                    if (($deg>=0.50)&&($deg<0.75)) {
                        return $degradacion = 0.75;
                    } else {
                        return $degradacion =1;
                    }
                }
                
            }
            
        }

    }

    public  function probabilidad($prob){
            if (($prob>=0)&&($prob<0.01)) {
                return $probabilidad=0.01;
            } else {
                if (($prob>=0.01)&&($prob<0.10)) {
                    return $probabilidad=0.10;
                } else {
                    if (($prob>=0.10)&&($prob<0.50)) {
                        return $probabilidad=0.50;
                    } else {
                        if (($prob>=0.50)&&($prob<0.70)) {
                            return $probabilidad = 0.70;
                        } else {
                            return $probabilidad =1;
                        }
                    }
                    
                }
                
            }
            
    }
}
