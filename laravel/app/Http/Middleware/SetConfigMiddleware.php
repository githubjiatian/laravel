<?php

namespace App\Http\Middleware;

use Closure;

class SetConfigMiddleware
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
        if(session('config.status') == 2){

            return redirect('/config');
        }else{
            return $next($request);
        }
        
    }
}
