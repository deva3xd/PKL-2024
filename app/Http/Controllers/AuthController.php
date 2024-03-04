<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        $title = "Login";
        return view('login', ['title' => $title]);
    }

    public function login(Request $request) {
        $credentials = [
            'username' => $request['username'],
            'password' => $request['password']
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->intended("/pendaftaran");
        } else {
            alert()->error('Gagal','Username atau Password Salah!');
            return redirect()->intended("/")->with('error', 'Username atau Password Salah');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect(route('login'))->with('success', 'Logout Successfully');
    }
}
