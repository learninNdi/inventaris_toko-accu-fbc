<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class AuthController extends Controller
{
    public function loginView(Request $request) {
        if(Auth::check()) {
            return back();
        }

        // dd($request->getRequestUri());
        // dd($request->path());
        // dd(url()->previous->path());
        // dd($request->all());

        return view('pages.auth.login');
    }

    public function login(Request $request) {

        if(Auth::check()) {
            return back();
        }

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
