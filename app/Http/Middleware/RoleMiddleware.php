<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
<<<<<<< HEAD
     *@param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$role){
        if(auth()->check() && auth()->user()->role === $role){
            return $next($request);
        }
    
        abort(403, 'acesso nao autorizado');
}
}
=======
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (auth()->check() && auth()->user()->role === $role) {
            return $next($request);
        }

        abort(403, 'acesso não autorizado');
    }
   
    }

>>>>>>> eb051021f15918989e5f5574ee886f298795f5f5
