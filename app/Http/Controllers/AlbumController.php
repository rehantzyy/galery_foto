<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\albums;
use Illuminate\Support\Facades\Auth;


class AlbumController extends Controller
{
    public function tambah_album(Request $request){
        $request->validate([
            'nama_album'=>'required',
            'deskripsi'=>'required',
        ], [
            'nama_album.required' => 'nama_album wajib diisi.',
            'deskripsi.required' => 'deskripsi wajib diisi.',
        ]);
        albums::create([
            'nama_album' =>$request->nama_album,
            'deskripsi'=>$request->deskripsi,
            'user_id'=> Auth::user()->id,
        ]);
        return back();
    }
    public function detail_album($album){
        $album =albums::find($album);
        return view('detail_album', compact('album'));
    }


}
