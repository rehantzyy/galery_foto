<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class WelcomeController extends Controller
{
    public function index()
    {
        return "<h1>halo gays</h1>";
    }

    public function show()
    {
        return view('dashboard');
    }

    public function show_siswa()
    {
        return view('siswa');
    }
}
