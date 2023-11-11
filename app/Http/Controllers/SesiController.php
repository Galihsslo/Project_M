<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    public function index()
    {
        return view('Auth.index');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email Wajib Di Isi',
            'password.required' => 'Password Wajib Di Isi',
        ]);

        $Login = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($Login)) {
            if (Auth::user()->role == 'admin') {
                return redirect('admins');
                // dd($request->all());
            } else if (Auth::user()->role == 'bendahara') {
                return redirect('bendahara');
            } else if (Auth::user()->role == 'wali') {
                return redirect('wali');
            }
            exit();
        } else {
            // return redirect('/login')->withErrors('Username Dan Password Tidak Sesuai')->withInput();
            dd($request->all());
        }
    }


    // public function login(Request $request): RedirectResponse
    // {
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();

    //         return redirect()->intended('wali');
    //     }

    //     return back()->withErrors([
    //         'email' => 'The provided credentials do not match our records.',
    //     ])->onlyInput('email');
    // }



    public function Logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
