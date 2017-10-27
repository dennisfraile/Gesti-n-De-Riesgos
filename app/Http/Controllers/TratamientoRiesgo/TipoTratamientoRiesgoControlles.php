<?php

namespace GestionDeRiesgos\Http\Controllers\TratamientoRiesgo;

use Illuminate\Http\Request;

use GestionDeRiesgos\Http\Requests;
use GestionDeRiesgos\Http\Controllers\Controller;
use \GestionDeRiesgos\Models\TipoTratamiento;
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
            $tipotratamientos=DB::table('tipotratamiento as tt')
            ->select('tt.idtipotratamiento','tt.nombretipotrata','tt.descriptipotrata')
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
        $tipotratamiento=new TipoTratamiento;
        $tipotratamiento->idtipotratamiento=$request->get('idtipotratamiento');
        $tipotratamiento->nombretipotrata=$request->get('nombretipotrata');
        $tipotratamiento->descriptipotrata=$request->get('descriptipotrata');

        $tipotratamiento->save();
        
        return Redirect::to('tipotratamiento');
        
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
        $id=$tipotratamiento->idtipotratamiento;
        return  view("tipotratamiento.edit", ["tipotratamiento"=>TipoTratamiento::findOrFail($id)]);

        
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
