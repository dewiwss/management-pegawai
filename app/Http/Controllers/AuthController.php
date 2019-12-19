<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AuthController extends Controller
{
    public function ShowFormLogin(){
        if(Auth::check())
            return redirect('/dashboard');
        else
            return view('user.login');
    }

    public function UserLogin(Request $request){
        $this->validate($request, [
            'email' => 'required|email|max:50',
            'password' => 'required|min:8'
        ]);
        $email = $request->email;
        $password = $request->password;
        $remember = $request->has('remember');
        if(Auth::attempt(['email'=>$email,'password'=>$password],$remember)){
            return redirect()->intended('/dashboard');
        }

        return redirect('/user/login')->with('Gagal','Email atau Password Salah');
    }

    public function UserLogout(){
        Auth::logout();
        return redirect('/user/login');
    }

    public function ShowFormRegister(){
        if(Auth::check())
            return redirect('/dashboard');
        else
            return view('user.register');
    }

    public function UserRegister(Request $request){

    }
}
