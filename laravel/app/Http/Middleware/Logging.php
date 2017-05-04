<?php

namespace App\Http\Middleware;

use Closure;

class Logging
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
        //dd($request); //判断是否有session
         // dd(session("users")['name']);
        //判断是否（登录）有session，有继续访问，没有就返回登录页
        if(session()->has('users')){
            return $next($request);
        }
        // return redirect('/home/login');
        return $next($request);
    }
}
