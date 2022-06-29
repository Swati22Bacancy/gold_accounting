<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function register (Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required','email', 'unique:users'],
            'password' => ['required', 'min:6']
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
    }

    public function login (Request $request)
    {
        $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($request->only('email','password')))
        {
            return response()->json(Auth::user(),200);
        }
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect']
        ]);
    }
}