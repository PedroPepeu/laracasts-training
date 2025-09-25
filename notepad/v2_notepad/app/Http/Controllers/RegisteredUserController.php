<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'password' => [
                'required', 
                'confirmed',
                Password::min(8)
                    ->letters()
                    ->numbers()
                    // ->mixedCase()
                    // ->symbols()
                    // ->uncompromised()
            ],
        ]);

        $user = User::create($attributes);

        Auth::login($user);

        return redirect('/notepad');
    }
}
