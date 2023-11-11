<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function index()
    {
        $santria = Santri::where('status', 'aktif')->count();
        $santrib = Santri::where('status', 'nonaktif')->count();
        $santri = Santri::all();
        return view('user.admin.datasantri', compact('santria', 'santrib', 'santri'));
    }
}
