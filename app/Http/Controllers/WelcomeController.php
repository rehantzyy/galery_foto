<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\photo;

class WelcomeController extends Controller
{
    public function index()
    {
        $foto=photo::all();
        return view('beranda', compact('foto'));

    }

    public function show()
    {
        return view('dashboard');
    }

    public function galery()
    {
        $foto=photo::all();
        return view('galery', compact('foto'));
    }
    public function home()
    {
        return view('home');
    }
    public function singlegalery()
    {
        return view('singlegalery');
    }

    public function postingan($postingan)
    {
        $foto=photo::find($postingan);
        return view('postingan', compact('foto'));
    }
    public function profil()
    {
        $foto=photo::where('user_id', Auth::user()->id)->get();
        return view('profil', compact('foto'));
    }
    public function tambahpostingan()
    {
        return view('tambahpostingan');
    }
    public function album()
    {
        return view('album');
    }
}
