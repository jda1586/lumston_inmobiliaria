<?php

namespace App\Http\Middleware;

use Closure;

class RolesPermissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();
        $permissions = json_decode($user->role->permissions, true);
        $route = $request->route()->getName();

        if (in_array($route, $permissions['block']))
            return redirect()->route('properties.index');

        return $next($request);
    }
}
