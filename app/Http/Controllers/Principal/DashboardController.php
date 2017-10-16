<?php

namespace GestionDeRiesgos\Http\Controllers\Principal;

use Illuminate\Http\Request;

use GestionDeRiesgos\Http\Requests;
use GestionDeRiesgos\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //

    public function index(){
        return view('dashboard');
    }
        public function modelweb()
        {
            # code...
            return view('modelweb');
        }
}
