<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // pakai username spesifix
        // if (auth()->guest() || auth()->user()->username !== 'komarudin') {
        //     abort(403);
        // }

        // pakai table is_admin nilainya true
        if (auth()->guest() || !auth()->user()->is_admin) {
            abort(403);
        }
        return $next($request);
    }
}
