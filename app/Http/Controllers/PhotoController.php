<?php

namespace App\Http\Controllers;

use App\Models\photo;
use App\Models\likes;
use App\Models\comments;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PhotoController extends Controller
{
    public function edit_foto($id,Request $request){
        $foto = photo::find($id);
        $foto->deskripsi= $request->deskripsi;
        $foto->album_id = $request->album;
        $foto->save();
        return back();
    }
    public function like($photo)
    {
        $check = likes::where('photo_id', $photo)->where('user_id', Auth::user()->id)->count();
        if ($check>=1) {
            # code...
            likes::where('photo_id', $photo)->where('user_id', Auth::user()->id)->delete();
        } else {
        likes::create([
            'photo_id' =>$photo,
            'user_id'=>Auth::user()->id,
        ]);
    }
        return back();
    }
    public function comments(Request $request,$photo){
      comments::create([
        'photo_id' =>$photo,
        'user_id' =>Auth::user()->id,
        'isi_komentar' =>$request->isi_komentar
      ]);
      return back();
    }
    public function delete_comment($comment){
        $komentar=comments::find($comment);
        $komentar->delete();
        return back();
    }
    public function edit_comment(Request $request,$comment){
        $komentar=comments::find($comment);
        $komentar->isi_komentar = $request->isi_komentar;
        $komentar->save();
        return back();
        }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    // dd($request->all());
        $request->validate([
            'judul' => 'required',
            'foto' => 'required|image|mimes:png,jpg|max:50000',
            'deskripsi' => 'required',
        ]);
        $data=[
            'judul_foto' => $request->judul,
            'lokasi_file' => $request->file('foto')->store('images'),
            'deskripsi' => $request->deskripsi,
            'user_id'=> Auth::user()->id
        ];

        photo::create($data);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(photo $photo)
    {
        //
    }
}
