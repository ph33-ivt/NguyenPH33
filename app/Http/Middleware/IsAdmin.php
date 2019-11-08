<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
        //kiểm tra xem đăng nhập chưa và kiểm tra xem có phải là admin không
        if(\Auth::check() && \Auth::user()->role_id == 1)
        {
        return $next($request);
        }
        return redirect('/');
    }
}
