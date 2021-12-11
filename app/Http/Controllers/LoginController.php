<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends BaseController
{

    public function login()
    {
      return view('Front.login');
    }
    public function handleLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->id) {
                return redirect()->intended('/user');
            }else
            {
                return redirect()->route('index');
            }
        }
        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }


}
