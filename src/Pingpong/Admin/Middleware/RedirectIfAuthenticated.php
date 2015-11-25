<?php

namespace Pingpong\Admin\Middleware;

use Closure;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check() && $request->user()->is('admin')) {
            return redirect()->route('admin.home');
        }

        return $next($request);
    }
}
