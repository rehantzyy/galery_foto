<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('beranda');
    }

    public function show()
    {
        return view('dashboard');
    }

    public function beranda()
    {
        return view('beranda');
    }
    public function galery()
    {
        return view('galery');
    }
    public function home()
    {
        return view('home');
    }
    public function singlegalery()
    {
        return view('singlegalery');
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function postingan()
    {
        return view('postingan');
    }
    public function profil()
    {
        return view('profil');
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
