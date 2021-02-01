<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use LaravelSimpleBases\Exceptions\AuthenticationException;

class CheckAuth
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (empty(Auth::user())) {
            throw new AuthenticationException(
                'Auttentication required'
            );
        }

        return $next($request);
    }
}
