<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function login()
    {
        return view('login.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
                return redirect()->intended('admin/posts');
        }
        return redirect()->back()->withErrors(['success ', 'username or password is wrong']);
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }


}
