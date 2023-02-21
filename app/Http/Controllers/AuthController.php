<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    //

    public function register(){
        if($req->method() == "POST"){
            $data = $req->validate([
                'email' => 'required',
                'name' => 'required',
                'password' => 'required' 
            ]);
            User::create($data);
            return redirect()->route('auth.login');
        }
        return view("auth.register");
    // get method
    return ['hello'=>"testing done"];
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
        return ['hello'=>"testing done"];
    }
}
