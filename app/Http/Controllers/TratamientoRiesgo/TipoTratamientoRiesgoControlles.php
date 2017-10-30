<?php

namespace GestionDeRiesgos\Http\Controllers\TratamientoRiesgo;

use Illuminate\Http\Request;

use GestionDeRiesgos\Http\Requests;
use GestionDeRiesgos\Http\Controllers\Controller;
use GestionDeRiesgos\Models\TipoTratamiento;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

class TipoTratamientoRiesgoControlles extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        if($request)
        {
            $tipotratamientos=DB::table('tipotratamiento')
            ->select('idtipotratamiento','nombretipotrata','descriptipotrata')
            
            ->get();
            return 
            view("tipotratamiento.index", ["tipotratamientos"=>$tipotratamientos]);
            
        }
                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 
        view("tipotratamiento.create");
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipotratamientos= new TipoTratamiento;
        //$tipotratamiento->idtipotratamiento=$request->get('idtipotratamiento');
        $tipotratamientos->nombretipotrata=$request->get('nombretipotrata');
        $tipotratamientos->descriptipotrata=$request->get('descriptipotrata');
        $tipotratamientos->save();
        
        return Redirect::to('tipotratamiento.index');
        
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
        $tipotratamientos=DB::table('tipotratamiento')
        ->select('nombretipotrata','descriptipotrata')
        ->get();
        return View("tipotratamiento.edit",["tipotratramiento"=>$tipotratamientos]);

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
      
        return  view("tipotratamiento.edit", ["tipotratamientos"=>TipoTratamiento::findOrFail($id)]);

        
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
        $affectedRows = TipoTratamiento::where('idtipotratamiento','=',$id)
        ->update([
            'idtipotratamiento'=>$request->get('idtipotratamiento'),
            'nombretipotrata'=>$request->get('nombretipotrata'),
            'descriptipotrata'=>$request->get('descriptipotrata')]
        );
        return Redirect::to('tipotratamiento');
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
        $affectedRows = TipoTratamiento::where('idtipotratamiento','=',$id)->delete();
        return Redirect::to('tipotratamiento');
    }
}
