<?php

namespace GestionDeRiesgos\Http\Controllers;

use Illuminate\Http\Request;

use GestionDeRiesgos\Http\Requests;
use GestionDeRiesgos\Http\Requests\EmpresaRequest;
use GestionDeRiesgos\Models\Empresa;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB; 


class EmpresaController extends Controller
{
    
    public function index()
    {
        
        $empresa = DB::table('empresa')
        ->select('idempresa','nombreempresa','descripempresa', 'politica','objetivo','alcance')
        ->where('idempresa','=','1')
        ->get();
        
        return view('empresa.index',["empresa"=>$empresa]); 
    }

    public function create()
    {
    	return view("empresa.create");
    }

    public function store(EmpresaRequest $request)
    {

        $empresa=new Empresa;
        $empresa->nombreempresa=$request->get('nombreempresa');
        $empresa->descripempresa=$request->get('descripempresa');
        $empresa->politica=$request->get('politica');
        $empresa->objetivo=$request->get('objetivo');
        $empresa->alcance=$request->get('alcance');
        $empresa->save();

        return Redirect::to(''); 
    }

    public function show($id)
    {
        $empresa=DB::table('empresa as emp')
        	->select('nombreempresa','descripempresa', 'politica','objetivo','alcance')
        	->where('idempresa','=','1')->get();
  
    	return view("Empresa.show",["empresa"=>$empresa]);
    }

    public function edit($id)
    {   
        return view("empresa.edit",["empresa"=>Empresa::findOrFail($id)]);
    }
        
    public function update(EmpresaRequest $request,$id)
    {

    	$affectedRows = Empresa::where('idempresa','=',$id)
        ->update(['idempresa'=> $request->get('idempresa'),
            'nombreempresa'=>$request->get('nombreempresa'),
            'descripempresa'=>$request->get('descripempresa'),
            'politica'=>$request->get('politica'),
            'objetivo'=>$request->get('objetivo'),
            'alcance'=>$request->get('alcance')]);

        return Redirect::to('empresa');
    }
}
