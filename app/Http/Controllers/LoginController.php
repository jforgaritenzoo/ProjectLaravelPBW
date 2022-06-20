<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function formlogin(){
        return view('login');
    }
    public function ceklogin(Request $req){
        $user = User::where([
            'nik_user' => $req->nik_user,
            'password' => md5($req->password)
        ])->first();

        if ($user) {
            Auth::login($user);

            return redirect('/dashboard');
        }
        $this->middleware('preventBackHistory');
        $this->middleware('auth');

        return redirect('/login')->with('alert-danger','Username atau Password Salah');

                // if (!Auth::attempt(['nik_user' => $req->nik_user, 'password' => md5($req->password)])){
        //     return redirect('/login')->with('alert-danger','Username atau Password Salah');
        // }else{
        //     return redirect('/dashboard');
        // }
    }
    public function logout(){
        $this->middleware('preventBackHistory');
        $this->middleware('auth');
        Session::flush();
        Auth::logout();
        return redirect('/login')->with('alert-info','Anda telah berhasil Log-out');
    }

    public function formregister(){
        return view('register');
    }
}
