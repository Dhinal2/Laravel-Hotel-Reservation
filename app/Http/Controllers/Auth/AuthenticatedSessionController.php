<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Providers\RouteServiceProvider;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate(); // This authenticates the user

        $request->session()->regenerate(); // Regenerates the session ID

        // --- START CUSTOM REDIRECTION LOGIC ---
        $user = Auth::user(); // Get the authenticated user

        //dd($user->role);

        switch ($user->role) {
            case 'admin':
                return redirect()->intended('/admin/dashboard'); // Redirect admin
                break;
            case 'travel_agent':
                return redirect()->intended('/travel-agent/home'); // Redirect travel agent
                break;
            case 'individual':
                return redirect()->intended('/'); // Redirect individual to home page
                break;
            default:
                return redirect()->intended('/'); // Fallback for other roles or unset role
                break;
        }
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
