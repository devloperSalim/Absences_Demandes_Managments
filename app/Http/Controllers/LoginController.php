<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function login(Request $request){
        $email = $request->email_etu;
        $password = $request->password;
        $credentials = ['email_etu'=>$email , 'password'=>$password];
        // dd($credentials);
        // dd(Auth::attempt($credentials));
        if(Auth::attempt($credentials)){
            // $idStagiaire = Auth::user()->id;
            $request->session()->regenerate();
            return to_route('demandes.create')->with('success','connected successefely');
        }else{
            return redirect()->back();
        }

    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route('login.show');
    }
}
