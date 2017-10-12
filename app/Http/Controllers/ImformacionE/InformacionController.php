<?php

namespace GestionDeRiesgos\Http\Controllers\ImformacionE;

use Illuminate\Http\Request;

use GestionDeRiesgos\Http\Requests;
use GestionDeRiesgos\Http\Controllers\Controller;

class InformacionController extends Controller
{
    public function informacion(){
    	return view('\Informacion');
    }
}
