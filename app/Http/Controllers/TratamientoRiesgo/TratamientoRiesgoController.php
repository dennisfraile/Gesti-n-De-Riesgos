<?php

namespace GestionDeRiesgos\Http\Controllers\TratamientoRiesgo;

use Illuminate\Http\Request;

use GestionDeRiesgos\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use GestionDeRiesgos\Http\Controllers\Controller;
use GestionDeRiesgos\Models\TratamientoRiesgo;
use GestionDeRiesgos\Models\TipoTratamiento;
use GestionDeRiesgos\Models\Activo;
use Session;
use DB;
class TratamientoRiesgoController extends Controller
{
	public function __construct()
    {

    }

    public function index(Request $request)
    {
        if ($request)
        {
           
            $tratamientos=DB::table('tratamientoriesgo as tratamiento')
            ->join('activo as act','act.idactivo','=','tratamiento.idactivo')
            ->join('tipotratamiento as tt','tt.idtipotratamiento','=','tratamiento.idtipotratamiento')
            ->select('tratamiento.idactivo','act.nombreactivo','tt.idtipotratamiento','tt.nombretipotrata as tipotratamiento',
            'tratamiento.idtratamiento','tratamiento.nombretratamiento','tratamiento.descriptratamiento')->get();
            
            return view('tratamientoriesgo.index',["tratamientos"=>$tratamientos]);
        }
    }
 
    public function create()
    {
        $activos=DB::table('activo as act')
        ->select('act.idactivo','act.nombreactivo')->get();

        $tipotratamiento=DB::table('tipotratamiento as tt')
        ->select('tt.idtipotratamiento','tt.nombretipotrata')->get();
        
    	return view("tratamientoriesgo.create",["activos"=>$activos,"tipotratamiento"=>$tipotratamiento]);
    }

    public function store(Request $request)
    {
    	$tratamiento=new TratamientoRiesgo;
    	$tratamiento->idtipotratamiento=$request->get('idtipotratamiento');
    	$tratamiento->idactivo=$request->get('idactivo');
        $tratamiento->nombretratamiento=$request->get('nombretratamiento');
        $tratamiento->descriptratamiento=$request->get('descriptratamiento');
        
        $tratamiento->save();
        
        return Redirect::to('tratamientoriesgo');
    }
        
    public function show($id)
    {
        
    }
        
    public function edit($id)
    {   

       $activos=DB::table('activo as act')
        ->select('act.idactivo','act.nombreactivo')->get();
        $tipotratamiento=DB::table('tipotratamiento as tt')
        ->select('tt.idtipotratamiento','tt.nombretipotrata')->get();
        return view("tratamientoriesgo.edit",["tratamientos"=>
        TratamientoRiesgo::findOrFail($id),"activos"=>$activos,"tipotratamiento"=>$tipotratamiento]);

    }
        
    public function update(Request $request,$id)
    {

    	$affectedRows = TratamientoRiesgo::where('idtratamiento','=',$id)
        ->update([
            'idtipotratamiento'=> $request->get('idtipotratamiento'),
            'idactivo'=>$request->get('idactivo'),
            'nombretratamiento' =>$request->get('nombretratamiento'),
            'descriptratamiento' =>$request->get('descriptratamiento')]);

        return Redirect::to('tratamientoriesgo');
    }   

    public function destroy($id)
    {
    	$affectedRows = TratamientoRiesgo::where('idtratamiento','=',$id)->delete();
        return Redirect::to('tratamientoriesgo');

    }
}
