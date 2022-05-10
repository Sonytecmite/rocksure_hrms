<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use AuthenticatesUsers;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function logout(Request $request){

        Auth::logout();

        return redirect()->route('login');
    }

    public function loginUser(UserLoginRequest $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;

        $credentials = $request->only('staff_id', 'password');

        if (Auth::attempt($credentials, $remember_me)) {
           
            return redirect('admin/dashboard');

        }
        
        session()->flash('invalid_credentials', 'Invalid Staff ID or Password');
        return redirect()->back();
       
    }
}
