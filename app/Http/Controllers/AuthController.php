<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }

    public function login_proses(Request $request){
        $request->validate([

            'email'=>'required',
            'password'=>'required',
        ], [
            'email.required' => 'Email wajib diisi.',
            'password.required' => 'Password wajib diisi.',
        ]);

        $data=[
            'email' =>$request->email,
            'password' =>$request->password,
        ];

            if(Auth::attempt($data)){
                return redirect()->route('beranda')->with('success','berhasil login');
            } else{
              return redirect ()->back()->with('error','Email atau password salah');
            }
    }
    public function register_proses(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'address' => 'required',
            'password' => 'required|min:8',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'address.required' => 'Alamat wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 8 karakter.',
        ]);
        $data=[
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'password' => Hash::make($request->password)
        ];


        User::create($data);

        return Redirect()->back()->with('success', 'Registrasi berhasil! Silakan login.');

    }
     public function logout(){
        Auth::logout();
        return redirect()->route('beranda')->with('success','Sukses logout');
     }
}
