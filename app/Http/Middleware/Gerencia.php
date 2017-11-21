<?php

namespace GestionDeRiesgos\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Gerencia
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
        if (Auth::user()->adminsist()=="gerencia") {
            return $next($request);
        }else{
            //return redirect()->guest('/');
            abort(401);
        }
        
        
    }
}
