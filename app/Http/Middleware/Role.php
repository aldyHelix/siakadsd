<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Gate;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (Gate::allows($role.'-access', auth()->user())) {
            return $next($request);
        }
        return response('Unauthorized.', 401);
        //return $next($request);
    }
}
