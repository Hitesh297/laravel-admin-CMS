<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function logout()
    {
        auth()->logout();
        return redirect('/auth/login');
    }
    
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // dump($attributes);

        if(auth()->attempt($attributes))
        {
            return redirect('/auth/dashboard');
        }
        
        return back()
            ->withInput()
            ->withErrors(['email' => 'Invalid email/password combination']);
    }

    public function dashboard()
    {
        return view('auth.dashboard');
    }

}
