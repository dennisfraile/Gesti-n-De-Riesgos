<?php

namespace GestionDeRiesgos\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use GestionDeRiesgos\Http\Requests\VulnerabilidadRequest;
use GestionDeRiesgos\Http\Requests;
use GestionDeRiesgos\Models\Vulnerabilidad;
use Carbon\Carbon;
use Session;
use DB;

class VulnerabilidadController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        if ($request)
        {
           
            $vulnerabilidades=DB::table('vulnerabilidad as v')
            ->join('amenaza as a','a.idamenaza','=','v.idamenaza')
            ->select('v.idvulnerabilidad','v.nombrevulne','v.descripvulne','a.idamenaza','a.nombreamenaza')
            ->get();
            
            return view('vulnerabilidad.index',["vulnerabilidades"=>$vulnerabilidades]);
        }
    }
 
    public function create()
    {
        $amenazas=DB::table('amenaza as a')
        ->select('a.idamenaza','a.nombreamenaza')->get();
        
    	return view("vulnerabilidad.create",["amenazas"=>$amenazas]);
    }

    public function store(VulnerabilidadRequest $request)
    {
    	$vulnerabilidad=new Vulnerabilidad;
    	$vulnerabilidad->idamenaza=$request->get('idamenaza');
    	$vulnerabilidad->nombrevulne=$request->get('nombrevulne');
        $vulnerabilidad->descripvulne=$request->get('descripvulne');
        $vulnerabilidad->save();
        
        return Redirect::to('vulnerabilidad');
    }
        
    public function show($id)
    {
        
    }
        
    public function edit($id)
    {   

       $amenazas=DB::table('amenaza as a')
        ->select('a.idamenaza','a.nombreamenaza')->get();
        
        return view("vulnerabilidad.edit",["vulnerabilidad"=>Vulnerabilidad::findOrFail($id),"amenazas"=>$amenazas]);

    }
        
    public function update(VulnerabilidadRequest $request,$id)
    {

    	$affectedRows = Vulnerabilidad::where('idvulnerabilidad','=',$id)
        ->update(['idamenaza'=>$request->get('idamenaza'),
            'nombrevulne'=>$request->get('nombrevulne'),
            'descripvulne'=>$request->get('descripvulne')]);

        return Redirect::to('vulnerabilidad');
    }   

    public function destroy($id)
    {
    	$affectedRows = Vulnerabilidad::where('idvulnerabilidad','=',$id)->delete();
        return Redirect::to('vulnerabilidad');

    }
}
