<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $foto = Photo::all();
        return view('profile.index',compact('foto'));
    }

    public function update(Request $request){
        $user = Auth::user(); // mengambil data user yang sedang login

        // validasi input
        $request->validate([
            'poto_profil'=> 'image|mimes:jpeg,png,gif|max:2048', // Foto harus berupa gambar dengan maksimal 2mb
            'name' => 'required|string|max:225',
            'address' => 'required|string|max:255',
        ]);

        // proses perubahan foto profil jika ada
        if ($request->hasFile('poto_profil')) {
            $poto_profil = $request->file('poto_profil');
            $path = $poto_profil->store('public/images'); // simpan foto di penyimpanan tertentu
            $user = $pot_profil = basename($path);
        }
         // update nama dan alamat

        $user->name = $request->name;
        $user->address = $request->address;
        $user->save();
        
        return redirect()->back('beranda')->with('success','profile berhasil diperbarui');

    }
    }

