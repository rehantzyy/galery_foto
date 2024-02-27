@extends('layouts.main')
@section('content')
<h1>{{ $album->nama_album }}</h1>
<p>
    {{ $album->deskripsi }}
</p>
<div class="row g-2">

    @forelse ($album->photo as $item)
    <div class="col mb-2">
        <a href="/postingan/{{ $item->id }}"><img src="{{ asset('storage/'.$item->lokasi_file) }}"
            alt="image 1" class="w-100 rounded-3"></a>

    </div>

    @empty
    <p>data kosong</p>
    @endforelse


    </div>
@endsection
