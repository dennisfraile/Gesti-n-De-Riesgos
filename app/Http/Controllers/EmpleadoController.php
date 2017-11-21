<?php

namespace GestionDeRiesgos\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use GestionDeRiesgos\Http\Requests;
use GestionDeRiesgos\Http\Requests\EmpleadoRequest;
use GestionDeRiesgos\Models\Empleado;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use Session;
use DB;


class EmpleadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request)
        {
           
            $empleados=DB::table('empleado as em')
            ->select('em.idempleado','em.idempresa','em.idrol','em.foto','em.nombreempleado','em.apellido',
            		DB::raw("CONCAT(em.nombreempleado,' ', em.apellido) as nombre"))->get();
            
            return view('empleado.index',["empleados"=>$empleados]);
        }
    }
 
    public function create()
    {
        $empresas=DB::table('empresa as emp')
        ->select('emp.idempresa','emp.nombreempresa')->get();

        $roles=DB::table('rol as r')
        ->select('r.idrol','r.nombrerol')->get();
        
    	return view("empleado.create",["empresas"=>$empresas,"roles"=>$roles]); 
    }

    public function store(EmpleadoRequest $request)
    {
    	$empleado=new Empleado;

        if(Input::hasfile('foto')){
            $file=Input::file('foto');
            $file->move(public_path().'/fotos/empleados',Carbon::now()->second.$file->getClientOriginalName());
            $empleado->foto=Carbon::now()->second.$file->getClientOriginalName();
        }

        $empleado->idempresa=$request->get('idempresa');
        $empleado->idrol=$request->get('idrol');
    	$empleado->nombreempleado=$request->get('nombre');
    	$empleado->apellido=$request->get('apellido');
       	$empleado->save();
        
        return Redirect::to('empleado');
    }
        
    public function show($id)
    {
        
    }
        
    public function edit($id)
    {   

       	$empresas=DB::table('empresa as emp')
        ->select('emp.idempresa','emp.nombreempresa')->get();

      	$roles=DB::table('rol as r')
        ->select('r.idrol','r.nombrerol')->get();
        
        return view("empleado.edit",["empleado"=>Empleado::findOrFail($id),"empresas"=>$empresas,"roles"=>$roles]);

    }
        
    public function update(EmpleadoRequest $request,$id)
    {
        if(Input::hasfile('foto')){
            $file=Input::file('foto');
            //dd($file->getClientOriginalName());
            $empleado=Empleado::findOrFail($id);
            $fotovieja=$empleado->FOTO;
            if (is_file(public_path().'/fotos/empleados/'.$fotovieja)) {
            unlink(public_path().'/fotos/empleados/'.$fotovieja);
            } 
            $file->move(public_path().'/fotos/empleados',Carbon::now()->second.$file->getClientOriginalName());
            
            $affectedRows = Empleado::where('idempleado','=',$id)
            ->update(['idempresa'=>$request->get('idempresa'),
            'idrol'=> $request->get('idrol'),
            'nombreempleado' =>$request->get('nombre'),
            'apellido' =>$request->get('apellido'),
            'foto'=>Carbon::now()->second.$file->getClientOriginalName()]);

        }else{
            $affectedRows = Empleado::where('idempleado','=',$id)
            ->update(['idempresa'=>$request->get('idempresa'),
            'idrol'=> $request->get('idrol'),
            'nombreempleado' =>$request->get('nombre'),
            'apellido' =>$request->get('apellido')]);
        }

    	/*$affectedRows = Empleado::where('idempleado','=',$id)
        ->update(['idempresa'=>$request->get('idempresa'),
        	'idrol'=> $request->get('idrol'),
            'nombreempleado' =>$request->get('nombre'),
            'apellido' =>$request->get('apellido')]);*/

        return Redirect::to('empleado');
    }   

    public function destroy($id)
    {
    	$affectedRows = Empleado::where('idempleado','=',$id)->delete();
        return Redirect::to('empleado');

    }

    public function estado($id)
    {
        $empleado=Empleado::findOrFail($id);
        if($empleado->estadoempleado=='0')
             $empleado->estadoempleado='1';
         else
            $empleado->estadoempleado='0';

        $empleado->update();
        return Redirect::to('empleado');
    }
}
