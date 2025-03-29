<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user = Auth::user();
                $locale = LaravelLocalization::getCurrentLocale();

                if ($user->isAdmin()) {
                    return redirect(LaravelLocalization::getLocalizedURL($locale, route('admin_dashboard')));
                }

                if ($user->isInfluencer()) {
                    return redirect(LaravelLocalization::getLocalizedURL($locale, route('influencer_welcome')));
                }

                if ($user->isBrand()) {
                    return redirect(LaravelLocalization::getLocalizedURL($locale, route('brand_dashboard')));
                }

                // return redirect(LaravelLocalization::getLocalizedURL($locale, route('home')));
            }
        }

        return $next($request);
    }
}
