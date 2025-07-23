<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Validate required fields
        $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Create user
        User::create([
            'name' => $request->input('name') ?? '',
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        // Redirect to login with success message
        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }
}