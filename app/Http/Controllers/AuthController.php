<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function index() {
        $title = "Login";
        return view('auth.login', ['title' => $title]);
    }

    public function login(Request $request) {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended("/pendaftaran");
        } else {
            alert()->error('Gagal','Username atau Password Salah!');
            return redirect()->intended("/")->with('error', 'Username atau Password Salah');
        }
    }
    
    public function store(Request $request) {
        $validateData = validator($request->all(), [
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required'
        ])->validate();

        $user = new User;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect(route('login'))->with('success', 'Berhasil Register');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect(route('login'))->with('success', 'Logout Successfully');
    }

    public function register() {
        $title = "Register";
        return view('auth.register', ['title' => $title]);
    }
}
