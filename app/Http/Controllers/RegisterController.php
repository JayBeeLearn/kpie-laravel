<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request, User $user){
        $validate = $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $user->create([
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        Auth::attempt(['username' => $request['username'], 'password' => $request['password']]);

        return redirect()->route('business')->with('success', 'User Registration successful.');
        // dd(User::all());
    }
}
