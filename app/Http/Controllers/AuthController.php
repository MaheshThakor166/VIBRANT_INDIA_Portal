<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    //
    public function registerform(){
        return view('auth.signup');
    }
    public function  registersave(Request $request){
        $request->validate([
            'username' => 'required|unique:users|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6|confirmed',
            'contact_no' => 'required',
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Password ko hash karna
            'contact_no' => $request->contact_no,
        ]);

        return redirect()->route('login')->with('success', 'Registration successful! Please login.');

    }
    public function loginform(){
        return view('auth.login');
    }

    public function loginsave(Request $request) {
        // Validate incoming request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Retrieve user by email
        $user = User::where('email', $request->email)->first();
    
        // If user does not exist or password does not match, return with an error
        if (!$user || !Hash::check($request->password, $user->password)) {
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    
        // Log the user in
        Auth::login($user);
    
        // Redirect to home with a success message
        return redirect()->route('home')->with('success', 'Login successful!');
    }
    
    public function home()
{
    return view('home'); // Home view file
}

 public function adminview(){
    return view('adminpanel.admin');
 }

    public function logout()
{
    Auth::logout(); // Make sure this line is using the correct case
    return redirect()->route('login')->with('success', 'Successfully logged out!');
}

}
