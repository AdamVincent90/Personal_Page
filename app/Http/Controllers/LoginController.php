<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected function index()
    {
        return view('login.index');
    }

    public function validation(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email'
        ]);
        $user = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];

        if (Auth::attempt($user)) {

            return redirect()->intended('/about');

        } else {
            return back()->with('error', 'Incorrect Email or Password.');
        }
    }

    public function logOut()
    {
        Auth::logout();
        return redirect('/login')->with('error', 'You Have Logged out.');
    }
}
