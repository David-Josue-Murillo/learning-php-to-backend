<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Session;
use Symfony\Component\HttpFoundation\Response;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verificamos que halla un usuario autenticado
        if(Auth::user()){
            //Verificamos que el usuario sea de tipo admin
            if(Auth::user()->utype == 'ADM'){
                return $next($request);
            } 
            Session::flush(); // Elimina todas las sessiones
            return redirect()->route('login');
        }
        
        return redirect()->route('login');
    }
}
 