@extends('layouts.main')
@section('content')
    <form action="/tambah_album" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">nama album</label>
            <input type="text" name="nama_album" class="form-control" id="exampleFormControlInput1"
                placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <button type="submit">Tambah</button>
        </div>
    </form>
    @forelse (Auth::user()->albums as $i)
        <div class="card" style="width: 18rem;">

            <div class="card-body">
                <h5 class="card-title">{{ $i->nama_album }}</h5>
                <p class="card-text">{{ $i->deskripsi }}</p>
                <a href="/detail_album/{{ $i->id }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    @empty
    @endforelse
@endsection
