<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RolesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if(Auth::check()) {
            $role = auth()->user()->role; // TO GET TYPE OF ROLE FROM TABLE USERS IN DATABASE
            $hasAccess = in_array($role, $roles); // TO CHECK IF ROLE IN DATABASE === ROLE IN PARAMETER ROUTE IN FILE WEB.PHP
            if(!$hasAccess) {
                abort(403);
            }
        }
        return $next($request);
    }
}
