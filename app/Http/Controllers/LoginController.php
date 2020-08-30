<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    protected function index() {
        return view('login.index');
    }

    public function validation(Request $request) {

            $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required|alphaNum|min:6'
            ]);
            $user = [
                'email' => $request->get('email'),
                'password' => $request->get('password')
            ];


            if(Auth::attempt($user)) {

                    return redirect()->intended('/about');


            }
//            else {
//                return back()->with('error', 'Incorrect Email or Password.');
//            }
    }

    public function logOut() {
        Auth::logout();
        return redirect('/login')->with('error', 'You Have Logged out.');
    }
}
