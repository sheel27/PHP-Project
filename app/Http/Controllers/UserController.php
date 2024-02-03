<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Add validation logic as needed
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }

    public function showDashboard()
    {
        return view('dashboard', ['user' => Auth::user()]);
    }

    public function updateAccount(Request $request)
    {
        $user = auth()->user();
        $user->update($request->only(['name', 'email']));

        return redirect()->route('account')->with('success', 'Account information updated successfully.');
    }

}