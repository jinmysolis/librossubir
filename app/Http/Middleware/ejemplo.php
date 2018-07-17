<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class ejemplo
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
        
        Auth::user()->curriculum;
         
         
        if (auth()->user()->curriculum->email === 'solisjinmy@gmail.com') {
            return $next($request);
        }
        
        return redirect('conocimientos/create');
        
    }
}
