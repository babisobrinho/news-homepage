<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request) {

        // GET method
        if($request->isMethod('get')) {
            return view('auth.register');
        }

        // POST method

        // form fields validation
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // create a new user
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')) // password encryption
        ]);

        return redirect()->route('login') // sends to login page
            ->with('success', 'Your account has been created! You can login now :)');
        
    }

    public function login(Request $request) {

        // GET method
        if($request->isMethod('get')) {
            return view('auth.login');
        }

        // POST method

        // form fields validation
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // authentication attempt
        if(Auth::attempt($credentials)) {
            return redirect()
                ->route('home') // sends to home page
                ->with('success', 'Your are logged in!');
        }

        // validation failled
        return redirect()
            ->route('login') // stays on login page
            ->withErrors('Provided login information is not valid.');

    }

    public function logout (Request $request) {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
                ->route('home') // sends to home page
                ->with('success', 'You are logged out. Goodbye!');
    }
}
