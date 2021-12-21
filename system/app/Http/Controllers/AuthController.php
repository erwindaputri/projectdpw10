<?php

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller
{
    Function showlogin(){
        return view('login');
    }

    Function loginProcess(){
        if(Auth::attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('dashboard')->with('succes', 'Login Berhasil');
        }else{
            return back()->with('danger', 'Login Gagal, silahkan cek username dan password anda');
        }
    }    
 
    Function showregistrasi(){
        return view('backview.registrasi');
    }
}
