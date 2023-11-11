<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegController extends Controller
{
    public function register()
    {
        return view('Auth.register');
    }

    public function actionregister(Request $request)
    {
        $user = User::create([
            'nama' => $request->nama,
            'foto' => $request->foto,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login');
    }
}
