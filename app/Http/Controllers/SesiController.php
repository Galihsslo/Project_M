<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    public function index()
    {
        return view('Auth.index');
    }
    function login(Request $request)
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
            'password' => request()->password,
        ];
        if (Auth::attempt($Login)) {
            if (Auth::user()->role == 'admin') {
                return redirect('admins');
            } else if (Auth::user()->role == 'bendahara') {
                return redirect('bendahara');
            } else if (Auth::user()->role == 'wali') {
                return redirect('wali');
            }
            exit();
        } else {
            return redirect('/login')->withErrors('Username Dan Password Tidak Sesuai')->withInput();
        }
    }
    public function Logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
