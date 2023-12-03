<?php

namespace Cms\Modules\Admin\Middlewares;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated extends Middleware
{
    public function handle(Request $request, Closure $next, ...$guards)
    {
        if (!auth()->check() || !auth()->user()->hasRole('admin')) {
            return redirect()->route('admin.login');
        }

        return $next($request);
    }
}
