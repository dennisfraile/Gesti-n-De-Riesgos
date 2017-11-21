<?php

namespace GestionDeRiesgos\Http\Controllers;

use Illuminate\Http\Request;

use GestionDeRiesgos\Http\Requests;
use GestionDeRiesgos\Http\Requests\ControlRiesgoRequest;
use GestionDeRiesgos\Models\Control;
use GestionDeRiesgos\Models\Procedimiento;
use GestionDeRiesgos\Models\TratamientoRiesgo;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Session;
use DB; 



class ControlRiesgoController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request) 
        {
            $controles=DB::table('control as c')
            ->join('tratamientoriesgo as tr','tr.idtratamiento','=','c.idtratamiento')
            ->join('activo as ac','ac.idactivo','=','tr.idactivo')
            ->join('procedimiento as p','p.idprocedimiento','=','c.idprocedimiento')
            ->select('c.idcontrol','c.descripcontrol','c.encargado','c.fechainicio','c.fechafin','c.estado','c.presupuesto','ac.nombreactivo')
            ->get();

            /*$encargados=DB::table('control as c')
            ->join('tratamientoriesgo as tr','tr.idtratamiento','=','c.idtratamiento')
            ->join('activo as ac','ac.idactivo','=','tr.idactivo')
            ->join('empresa as e','e.idempresa','=','ac.idempresa')
            ->join('empleado as em','em.idempresa','=','e.idempresa')
            ->select('em.idempleado',DB::raw("CONCAT(em.nombreempleado,' ', em.apellido) as nombre"))
            ->get();*/

             $encargados=DB::table('empleado as em')
            ->select('em.idempleado',DB::raw("CONCAT(em.nombreempleado,' ', em.apellido) as nombre"))
            ->get();
            
            return view('control.index',["controles"=>$controles,"encargados"=>$encargados]);
        }
    }
 
    public function create()
    {

        $procedimientos=DB::table('procedimiento as p')
        ->select('p.idprocedimiento','p.nombreproced')
        ->get();

        $tratamientos=DB::table('tratamientoriesgo as tr')
        ->select('tr.idtratamiento','tr.nombretratamiento')
        ->get();

        $encargados=DB::table('empleado as em')
            ->select('em.idempleado',DB::raw("CONCAT(em.nombreempleado,' ', em.apellido) as nombre"))
            ->get();
        
    	return view("control.create",["procedimientos"=>$procedimientos,"tratamientos"=>$tratamientos,"encargados"=>$encargados]);
    }

    public function store(ControlRiesgoRequest $request)
    {
    	$control=new Control;
        $control->idtratamiento=$request->get('idtratamiento');
        $control->idprocedimiento=$request->get('idprocedimiento');
        $control->descripcontrol=$request->get('descripcontrol');
        $control->encargado=$request->get('encargado');
        $control->fechainicio=$request->get('fechainicio');
        $control->fechafin=$request->get('fechafin');
        $control->estado=$request->get('estado');
        $control->presupuesto=$request->get('presupuesto');
        $control->save();

        //Session::flash('store','¡El control de riesgo fue creado correctamente!');
        return Redirect::to('control');
    }
        
    public function show($id)
    {
       
    }
        
    public function edit($id)
    {   

        $control=DB::table('control as c')
            ->join('tratamientoriesgo as tr','tr.idtratamiento','=','c.idtratamiento')
            ->join('activo as ac','ac.idactivo','=','tr.idactivo')
            ->join('procedimiento as p','p.idprocedimiento','=','c.idprocedimiento')
            ->select('c.idcontrol','tr.idtratamiento','p.idprocedimiento','c.descripcontrol','c.encargado','c.fechainicio','c.fechafin','c.estado','c.presupuesto')
            ->where('c.idcontrol','=',$id)
            ->get();

         $procedimiento=DB::table('procedimiento as p')
         ->select('p.idprocedimiento','p.nombreproced')
         ->get();

         $tratamiento=DB::table('tratamientoriesgo as tr')
         ->select('tr.idtratamiento','tr.nombretratamiento')
         ->get();

         $encargados=DB::table('empleado as em')
            ->select('em.idempleado',DB::raw("CONCAT(em.nombreempleado,' ', em.apellido) as nombre"))
            ->get();

    	 return view("control.edit",["control"=>$control,"procedimiento"=>$procedimiento,"tratamiento"=>$tratamiento,"encargados"=>$encargados]);
    }
        
    public function update(ControlRiesgoRequest $request,$id)
    {
    	

    	$affectedRows = Control::where('idcontrol','=',$id)
        ->update(['idtratamiento'=> $request->get('idtratamiento'),
            'idprocedimiento'=>$request->get('idprocedimiento'),
            'descripcontrol' =>$request->get('descripcontrol'),
            'encargado' =>$request->get('encargado'),
            'fechainicio'=>$request->get('fechainicio'),
            'fechafin' =>$request->get('fechafin'),
            'estado' =>$request->get('estado'),
            'presupuesto'=>$request->get('presupuesto')]);

        //Session::flash('update','¡El control de riegos se ha actualizado correctamente!');       
        return Redirect::to('control');

    }   

    public function destroy($id)
    {
    	$affectedRows = Control::where('idcontrol','=',$id)->delete();
        return Redirect::to('control');
    }
}
