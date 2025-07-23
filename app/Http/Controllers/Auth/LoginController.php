<?php

// File: app/Http/Controllers/Auth/LoginController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $redirectTo = '/'; // Redirect to hello page after login

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect($this->redirectTo)->with('success', 'Logged in successfully!');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
    }
}

