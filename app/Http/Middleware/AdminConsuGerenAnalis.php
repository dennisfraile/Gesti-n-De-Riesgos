<?php

namespace GestionDeRiesgos\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminConsuGerenAnalis
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->type== "adminsistema" || Auth::user()->type== "adminempresa" || Auth::user()->type== "analista" || Auth::user()->type== "consultor" || Auth::user()->type== "gerencia") {
            return $next($request);
        }else{
            //return redirect()->guest('/');
            //dd(Auth::user()->type);
            abort(401);
        }
    }
}
