<?php

namespace App\Http\Middleware;

use App\Models\Page;
use Closure;

class getMenuItems
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
        return $next($request);
    }
}
