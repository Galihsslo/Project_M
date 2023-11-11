<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        // if (Auth::user()) {
        $admin = User::where('role', 'admin')->count();
        $bendahara = User::where('role', 'bendahara')->count();
        $wali = User::where('role', 'wali')->count();
        $datau = User::all();
        return view('user.admin.admin', compact('admin', 'bendahara', 'wali', 'datau'));
        // } else {
        //     return view('login')->with('basic1', 'Not Authorized');
        // }
    }
    public function bendahara()
    {
        return view('user.bendahara.bendahara');
    }
    public function wali()
    {
        return view('user.wali.wali');
    }
}
