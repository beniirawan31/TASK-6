<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
   {
    return view("auth.login");
   }
   public function aksilogin(Request $request)
   {
     $credentials = $request->validate([
        "email"=> ['required','email'],
        'password'=> ['required']
     ]);

     if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        // Cek apakah pengguna telah diautentikasi
        if (Auth::check()) {
            return redirect()->intended('/dashboard');
        }
    }

    // Jika autentikasi gagal, tampilkan pesan kesalahan
    $request->session()->flash('error', 'Invalid email or password!');
    return redirect('/login');
}
    public function logout(Request $request){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
