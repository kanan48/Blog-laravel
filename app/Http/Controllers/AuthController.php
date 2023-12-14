<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\signUp;

class AuthController extends Controller
{
    public function account(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:signup|max:255',
            'email' => 'required|email|unique:signup|max:255',
            'password' => 'required|min:6',
        ]);
        if($request->isMethod('post'))
        { 
            $data = new signUp;
            $data->username = $request->get('username');
            $data->email = $request->get('email');
            $data->password = Hash::make($request->get('password'));
            $data->save();
        }
        return redirect('/index')->with('success', 'Register successfully');
    }

    public function loginPost(Request $request)
    {
       
        $credentials = $request->only(['username','password']);
        if(Auth::guard('signup')->attempt($credentials))
        {
            return redirect()->intended('/index')->with('success','You have logged in');
        }
        else
        {
            return redirect('login')->with ('error','Oops! signup first');
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('login');
    }
}
