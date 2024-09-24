<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function login(){
        return view("login");
    }

    public function register(){
        return view("register");
    }

    public function u_login(Request $request){
        
        $form=$request->validate([
            "name"=>"required",
            "email"=>"required",
            "password"=>"required|min:3"
        ]);
       

        Auth::attempt($form);
        if(Auth::check()){
            return response("Login successful.");
        }else{
            return response("Login failed.");
        }
    }

    public function u_register(Request $request){
        $form=$request->validate([
            "name"=>["required",Rule::unique('users','name')],
            "email"=>["required",Rule::unique('users','email')],
            "password"=>"required|min:3|confirmed"
        ]);

        $user=User::create($form);
        if($user){
            return redirect("/login")->with("successful","Register successful.");
        }
        return back()->withErrors("message","Register failed.");
    }
}
