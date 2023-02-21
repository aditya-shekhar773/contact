<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    //

    public function register(Request $req){
        if($req->method() == "POST"){
            $data = $req->validate([
                'email' => 'required',
                'name' => 'required',
                'password' => 'required' 
            ]);
            $data['password'] = Hash::make($data['password']);
            User::create($data);
            return redirect()->route('auth.login');
        }
        return view("auth.register");
    // get method
    
    }

    public function login(Request $req){
        if($req->method() == "POST"){
                $data = $req->validate([
                    'email' => 'required',
                    'password' => 'required' 
                ]);
                // my work

        }

        // get method
        return view('auth.login');
    }
}
