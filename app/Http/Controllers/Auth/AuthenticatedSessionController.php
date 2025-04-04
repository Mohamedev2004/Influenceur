<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('forms.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
    // Authenticate the user
    $request->authenticate();

    // Regenerate the session to prevent session fixation
    $request->session()->regenerate();

    // Get the authenticated user
    $user = Auth::user();

    // dd($user);
    // Redirect based on user role
    // if ($user->isAdmin()) {
    //     return redirect()->route('admin_dashboard');
    // }
    // if ($user->isBrand()) {
    //     return redirect()->route('brand_welcome');
    // }
    // if ($user->isInfluencer()) {
    //     return redirect()->route('influencer_welcome');
    // }
    return $user->redirectAuthUser();

    }
    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
