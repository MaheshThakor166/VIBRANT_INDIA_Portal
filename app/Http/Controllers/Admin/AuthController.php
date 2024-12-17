<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('adminpanel.auth.login'); // Make sure this view exists
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Retrieve the admin by email
        $admin = Admin::where('email', $request->email)->first();
    
        // Check if the admin exists and if the password matches exactly as stored in the database
        if ($admin && $admin->password === $request->password) {
            // Log in the admin
            Auth::guard('admin')->login($admin);
            return redirect()->intended('/admin/dashboard')->with('success', 'Login successful!');
        }
    
        // If login fails, redirect back with an error message
        return redirect()->back()->withErrors(['email' => 'Invalid email or password.']);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
