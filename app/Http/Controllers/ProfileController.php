<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function edit()
    {
        return view('edit-profile');
    }

    public function update(Request $request)
    {
        // Add logic to update user profile here
        return redirect()->route('profile')->with('success', 'Profile updated successfully');
    }
}