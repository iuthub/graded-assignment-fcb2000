<?php

namespace App\Http\Middleware;

use Closure;


class MyDisableLogin
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
        $uri = $request->path();
        if ($uri=='login')
        {
            return redirect()->route('blog.index');
        }
        else
        {
            return $next($request);
        }
    }
}
