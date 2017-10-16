<?php

namespace GestionDeRiesgos\Http\Controllers;

use Illuminate\Http\Request;

use GestionDeRiesgos\Http\Requests;
use GestionDeRiesgos\Http\Requests\ActivoRequest;
use GestionDeRiesgos\Activo;
use GestionDeRiesgos\TipoActivo;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

class ActivoController extends Controller
{
	public function __construct()
    {

    }

    public function index(Request $request)
    {
        if ($request)
        {
           
            $activos=DB::table('activo as a')
            ->join('empresa as emp','emp.idempresa','=','a.idempresa')
            ->join('tipoactivo as ta','ta.idtipoactivo','=','a.idtipoactivo')
            ->select('a.idempresa','emp.nombreempresa','ta.idtipoactivo','ta.nombretipoactivo as tipoactivo','a.idactivo','a.nombreactivo','a.descripactivo')->get();
            
            return view('activo.index',["activos"=>$activos]);
        }
    }
 
    public function create()
    {
        $empresas=DB::table('empresa as emp')
        ->select('emp.idempresa','emp.nombreempresa')->get();

        $tipoactivo=DB::table('tipoactivo as ta')
        ->select('ta.idtipoactivo','ta.nombretipoactivo')->get();
        
    	return view("activo.create",["empresas"=>$empresas,"tipoactivo"=>$tipoactivo]);
    }

    public function store(ActivoRequest $request)
    {
    	$activo=new Activo;
    	$activo->idtipoactivo=$request->get('idtipoactivo');
    	$activo->idempresa=$request->get('idempresa');
        $activo->nombreactivo=$request->get('nombreactivo');
        $activo->descripactivo=$request->get('descripactivo');
        
        $activo->save();
        
        return Redirect::to('activo');
    }
        
    public function show($id)
    {
        
    }
        
    public function edit($id)
    {   

       $empresas=DB::table('empresa as emp')
        ->select('emp.idempresa','emp.nombreempresa')->get();

        $tipoactivo=DB::table('tipoactivo as ta')
        ->select('ta.idtipoactivo','ta.nombretipoactivo')->get();
        
        return view("activo.edit",["activo"=>Activo::findOrFail($id),"empresas"=>$empresas,"tipoactivo"=>$tipoactivo]);

    }
        
    public function update(ActivoRequest $request,$id)
    {

    	$affectedRows = Activo::where('idactivo','=',$id)
        ->update(['idtipoactivo'=> $request->get('idtipoactivo'),
            'idempresa'=>$request->get('idempresa'),
            'nombreactivo' =>$request->get('nombreactivo'),
            'descripactivo' =>$request->get('descripactivo')]);

        return Redirect::to('activo');
    }   

    public function destroy($id)
    {
    	$affectedRows = Activo::where('idactivo','=',$id)->delete();
        return Redirect::to('activo');

    }
}
