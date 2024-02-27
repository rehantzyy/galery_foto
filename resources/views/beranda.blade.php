@extends('layouts.main')
@section('content')
<!-- Page section -->
<div class="page-section home-page">
    <div class="hero-slider owl-carousel">
        @forelse ($foto as $item )
        <div class="slider-item d-flex align-items-center set-bg" data-setbg="{{ asset('storage/'.$item->lokasi_file) }}" data-hash="slide-1">
            <div class="si-text-box">
                <span>{{ $item->user->name }}</span>
                <h2>{{ $item->judul_foto }}</h2>
                <p>{{ $item->deskripsi }}</p>
                <a href="" class="site-btn">Read More</a>
            </div>
            <div class="next-slide-show set-bg" data-setbg="{{ asset('storage/'.$item->lokasi_file) }}">
                <a href="#slide-2" class="ns-btn">Next</a>
            </div>
        </div>
        @empty

        @endforelse





<!-- Page section end-->
@endsection
