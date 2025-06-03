<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            // No validation for 'role' here as it's a hidden field we control
        ]);

        // Determine the role based on the hidden input, default to 'individual'
        $role = $request->input('role', 'individual'); // Default to 'individual' if 'role' not present
        if (!in_array($role, ['admin', 'travel_agent', 'individual'])) { // Basic validation
            $role = 'individual'; // Fallback to safe default if manipulated
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $role, 
        ]);

        event(new Registered($user));

        Auth::login($user);

        // --- DIRECT REDIRECT BASED ON ROLE ---
        if ($user->role === 'admin') {
            return redirect()->intended('/admin/dashboard');
        } elseif ($user->role === 'travel_agent') {
            return redirect()->intended('/travel-agent/home'); // Or whatever your travel agent dashboard route is
        } else {
            // Default redirect for 'individual' or other roles
            return redirect()->intended('/'); // Or your main user dashboard
        }
        // --- END DIRECT REDIRECT ---
            }
}
