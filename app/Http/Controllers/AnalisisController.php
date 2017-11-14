<?php

namespace GestionDeRiesgos\Http\Controllers;

use Illuminate\Http\Request;

use GestionDeRiesgos\Http\Requests;
use GestionDeRiesgos\Activo;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

class AnalisisController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        if ($request)
        {
           
            $anactivos=DB::table('analisis as an')
            ->join('activo  as a','a.idactivo','=','an.idactivo')
            ->select('an.idactivo','a.nombreactivo','an.idanalisis'
            ,'an.disponibilidad'
            ,'an.confidencialidad','an.integridad',
            'an.valoractivo','an.degradacion',
            'an.impacto','an.probocurrencia',
            'an.riesgo')->get();
            
            return view('analisis.index',["anactivos"=>$anacivos]);
        }
    }
 
    public function create()
    {
        $activos=DB::table('activo as a')
        ->select('a.idactivo','a.nombreactivo')->get();

            
    	return view("analisis.create",["activos"=>$activos]);
    }

    public function store(Request $request)
    {
    	$anactivo = new Analisis;
    	$anactivo->idactivo=$request->get('idactivo');
    	$anactivo->disponibilidad=$request->get('disponibilidad');
        $anactivo->confidencialidad=$request->get('confidencialidad');
        $anactivo->integridad=$request->get('integridad');
        $anactivo->degradacion=$request->get('degradacion');
        $anactivo->probocurrencia=$request->get('probocurrencia'); 
        $anactivo->save();
        
        return Redirect::to('analisis');
    }
        
    public function show($id)
    {
        
    }
        
    public function edit($id)
    {   

       $empresas=DB::table('activo as a')
        ->select('a.idactivo','a.nombreactivo')->get();

        return view("analisis.edit",["analisis"=>
        Analisis::findOrFail($id),"activos"=>$activos]);

    }
        
    public function update(Request $request,$id)
    {

    	$affectedRows = Analisis::where('idanalisis','=',$id)
        ->update(['idactivo'=> $request->get('idactivo'),
        'disponibilidad'=>$request->get('disponibilidad'),
        'confidencialidad'=>$request->get('confidencialidad'),
        'integridad'=>$request->get('integridad'),
        'degradacion'=>$request->get('degradacion'),
        'probocurrencia'=>$request->get('probocurrencia'),
        
            ]);

        return Redirect::to('analisis');
    }   

    public function destroy($id)
    {
    	$affectedRows = Analisis::where('idanalisis','=',$id)->delete();
        return Redirect::to('analisis');

    }
}
