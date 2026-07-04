<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show Login Page
    public function showLogin()
    {
        return view('auth.login');
    }

    // Login Process
    public function login(Request $request)
    {
        // Validation
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Credentials
        $credentials = $request->only('email', 'password');

        // Attempt login
        if (Auth::attempt($credentials)) {

            // Regenerate session (security)
            $request->session()->regenerate();

            // Check admin role
            if (Auth::user()->is_admin != 1) {
                Auth::logout();

                return back()->withErrors([
                    'email' => 'You are not authorized as admin.',
                ]);
            }

            // Redirect to dashboard
            return redirect()->route('admin.dashboard');
        }

        // Failed login
        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}