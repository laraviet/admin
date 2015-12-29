<?php

namespace Laraviet\Admin\Middleware;

use Closure;

class OnlyUser
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
        if (!$request->user()->is('user')) {
            return redirect()->route('admin.login.index');
        }

        return $next($request);
    }
}
