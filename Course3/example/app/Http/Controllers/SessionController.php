<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (! Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials do not mach',
            ]);
        }
        
        request()->sessions()->regenerate(); // recycle the token so it protect the users from attacks

        return redirect('/jobs');
    }

    public function destory()
    {
        Auth::logout();

        return redirect('/');
    }
}
