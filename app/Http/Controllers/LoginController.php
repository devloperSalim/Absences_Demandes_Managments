<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $email = $request->email_etu;
        $password = $request->password;
        $credentials = ['email_etu' => $email, 'password' => $password];

        // Authenticate a regular user
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('demandes.create')->with('success', 'Connected successfully');
        } else {
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login.show');
    }

    // Admin

    public function showAdminLoginForm()
    {
        return view('auth.admin-login');
    }

    public function loginAdmin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $credentials = ['email' => $email, 'password' => $password];

        // Authenticate an administrator
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home')->with('success', 'Admin connected successfully');
        } else {
            return redirect()->back()->with('error', 'Invalid admin credentials');
        }
    }
}
