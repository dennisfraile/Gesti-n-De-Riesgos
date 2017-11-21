<?php

namespace GestionDeRiesgos\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Coordinador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::user()->type=="gerencia" || Auth::user()->type=="consultor" || Auth::user()->type=="analista") {
            return $next($request);
        }else{
            //return redirect()->guest('/');
            abort(401);
        }
        
        
    }
}
