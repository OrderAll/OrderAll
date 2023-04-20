<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class isRestAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()  && Auth::user()->is_restAdmin)
        {
            return $next($request);
        }
        
        return redirect('/')->with('access.denied', 'Attenzione! Solo i ristoratori hanno accesso a questa pagina!');

    }
}
