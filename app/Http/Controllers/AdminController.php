<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        // echo "hallo admin";
        // echo "<h1>" . Auth::user()->nama . "</h1>";
        // echo "<a href='logout'>Logout</a>";
        return view('user.admin');
    }
    public function bendahara()
    {
        return view('user.bendahara');
    }
    public function wali()
    {
        return view('user.wali');
    }
}
