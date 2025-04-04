<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Symfony\Component\HttpFoundation\Response;

class Admin_middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
            if (Auth::check() && Auth::user()->isAdmin()) {
                if ($request->is(LaravelLocalization::getCurrentLocale() . '/admin*')) {
                    return $next($request);
                }
                return redirect()->route('admin_dashboard');
            }
            return redirect()->route('welcome');
    }

}
