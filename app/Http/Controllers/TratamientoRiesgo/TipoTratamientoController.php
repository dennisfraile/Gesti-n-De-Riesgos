<?php

namespace App\Http\Controllers\TratamientoRiesgo;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\TratamientoRiesgo\TipoTratamiento;

class TipoTratamientoController extends Controller
{
    //
    $tipos_tratamientos =TipoTratamiento::select(all);
}
