<?php

namespace App\Http\Middleware;

use Closure;

class Login
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
        //判断是否（登录）有session，有继续访问，没有就返回登录页
        if(session()->has('adminuser')){
            return $next($request);
        }
        return redirect('/admin/login'); 
    }
}
