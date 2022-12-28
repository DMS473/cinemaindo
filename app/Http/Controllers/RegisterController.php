<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Controller
{
    public function index()
    {   
        return view('register.index',[
            "title" => "Register",
            "active" => "login"

        ]);
    }
    public function store(Request $request)
    {   
        $validateData = $request->validate([

            'name' =>'required|string|max:255',
            'username' =>'required|string|min:6|max:255',
            'email' =>'required|string|email:dns|max:255|unique:users',
            'password' =>'required|string|min:6',
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

        return redirect('/login')->with('alert-success', 'Register Successfully! Please login');
        
    }
   
}
