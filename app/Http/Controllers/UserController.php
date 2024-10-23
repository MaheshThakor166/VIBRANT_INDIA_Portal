<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    public function index(Request $request)
    {
        // Get the search input from the request
        $search = $request->input('search');
    
        // Query the users based on the search input, if it exists
        $users = User::when($search, function ($query, $search) {
            return $query->where('username', 'like', "%{$search}%")
                         ->orWhere('email', 'like', "%{$search}%")
                         ->orWhere('contact_no', 'like', "%{$search}%");
        })->get();
    
        // Return the view with the filtered user data
        return view('adminpanel.users.index', compact('users', 'search'));
    }
    
    public function create()
   {
    return view('adminpanel.users.create'); // Adjust the view name as necessary
   }

   public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'username' => 'required|string|max:255|unique:users',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6',
        'contact_no' => 'required|string|max:255',
    ]);

    // Create the user
    $user = User::create([
        'username' => $validatedData['username'],
        'email' => $validatedData['email'],
        'password' => Hash::make($validatedData['password']),
        'contact_no' => $validatedData['contact_no'],
    ]);

    // Redirect back with a success message
    return redirect()->route('userindex')->with('success', 'User created successfully.');
}
    public function edit($id)
    {
    $user = User::findOrFail($id);
    return view('adminpanel.users.edit', compact('user'));
     }


     public function update(Request $request, $id)
     {
         $user = User::findOrFail($id);
 
         // Validate the request data
         $request->validate([
             'username' => 'required|string|max:255',
             'email' => 'required|string|email|max:255',
             'contact_no' => 'required|string|min:10|max:10',
        ]);
 
         // Update the user with new data
         $user->username = $request->input('username');
         $user->email = $request->input('email');
         $user->contact_no = $request->input('contact_no');
        
       
 
         $user->save(); // Save the updated user data
 
         return redirect()->route('userindex')->with('success', 'User updated successfully!');
     }

     public function destroy($id)
    {
    // Find the user by ID
    $user = User::findOrFail($id);
    
    // Delete the user
    $user->delete();

    // Redirect back with a success message
    return redirect()->route('userindex')->with('success', 'User deleted successfully.');
   }

    
}
