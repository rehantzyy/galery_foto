@extends('layouts.main')
@section('content')
    <!-- Page section -->
    <div class="page-section gallery-page">
        <ul class="portfolio-filter">
            <li class="filter all active" data-filter="*">All</li>
            <li class="filter" data-filter=".photo">Photography</li>
            <li class="filter" data-filter=".nature">Nature</li>
            <li class="filter" data-filter=".love">Love</li>
            <li class="filter" data-filter=".animals">Animals</li>
        </ul>
        <div class="portfolio-gallery">

            @forelse ($foto as $item)
            <div class="gallery-item animals">
                <img src="{{ asset('storage/'.$item->lokasi_file) }}" alt="">
                <div class="hover-links">
                    <a href="/postingan/{{ $item->id }}" class="site-btn sb-light">Next</a>
                </div>
            </div>

            @empty

            @endforelse


        </div>

    </div>
    <!-- Page section end-->

    @endsection
