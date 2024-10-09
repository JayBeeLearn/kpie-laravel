<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }


    public function login(Request $request){

        $user = Auth::attempt(['username' => $request['username'], 'password' => $request['password']]);
        $userID = Auth::user()->id;

        if(!$user){
            return redirect()->route('login')->with('fail', 'Invalid credentials.');
        }

        // dd($userID);

        return redirect()->route('profile', $userID)->with('success', 'User Logged In successfully.');



    }
}
