<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm() {
        return view('login');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            return redirect()->route('dashboard')->with('message', 'خوش آمدید ' . $user->name);
        }

        return back()->withErrors(['email' => 'اطلاعات ورود نامعتبر است.']);
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }

}
