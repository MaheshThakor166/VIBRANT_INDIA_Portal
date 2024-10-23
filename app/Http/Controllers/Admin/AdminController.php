<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        // Logic for displaying the admin dashboard
        return view('admin.dashboard'); // Ensure this view exists
    }

    public function users()
    {
        // Logic for displaying the users list
        return view('admin.users'); // Ensure this view exists
    }
}
