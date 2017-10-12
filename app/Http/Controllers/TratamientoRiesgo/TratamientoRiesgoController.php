<?php

namespace App\Http\Controllers\TratamientoRiesgo;

use Illuminate\Http\Request;
use App\Models\TratamientoRiesgo\TratamientoRiesgo;
use App\Models\TratamientoRiesgo\TipoTratamiento;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TratamientoRiesgoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tratamientoriesgos = TratamientoRiesgo::select('tratamientoriesgo.idtratamiento',
        'tratamientoriesgo.nombretratamiento as tratamientoriesgo','tratamientoriesgo.descriptratamiento as tratamientoriesgo',
        'tipotratamiento.nombretipotrata as tipotratamiento')
        ->join('tipotratamiento','tipotratamiento.idtipotratamiento','=','tratamientoriesgo.id')
        ->get();
        return View('tratamientoriesgo/tratamientoriesgo')->with('tratamientoriesgos',$tratamientoriesgos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tipotratamiento = TipoTratamiento::plists('nombretipotrata','idtipotratamiento')->prepend('Seleccioname el Tipo de Tratamiento');
        return View('tratamientoriesgo.create')->with('tipotratamiento',$tipotratamiento);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        TratamientoRiesgo::create($request->all());   
       // Session::flash('save','Se ha creado correctamente'); 
        return redirect()->route('tratamientoriesgo.tratamientoriesgo');
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
}
