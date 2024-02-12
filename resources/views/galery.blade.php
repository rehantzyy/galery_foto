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
            <div class="gallery-item animals">
                <img src="img/gallery/1.jpg" alt="">
                <div class="hover-links">
                    <a href="/postingan" class="site-btn sb-light">Next</a>
                </div>
            </div>
            <div class="gallery-item nature">
                <img src="img/gallery/2.jpg" alt="">
                <div class="hover-links">
                    <a href="" class="site-btn sb-light">Next</a>
                </div>
            </div>
            <div class="gallery-item love">
                <img src="img/gallery/3.jpg" alt="">
                <div class="hover-links">
                    <a href="" class="site-btn sb-light">Next</a>
                </div>
            </div>
            <div class="gallery-item photo">
                <img src="img/gallery/5.jpg" alt="">
                <div class="hover-links">
                    <a href="" class="site-btn sb-light">Next</a>
                </div>
            </div>
            <div class="gallery-item nature">
                <img src="img/gallery/6.jpg" alt="">
                <div class="hover-links">
                    <a href="" class="site-btn sb-light">Next</a>
                </div>
            </div>
            <div class="gallery-item photo">
                <img src="img/gallery/4.jpg" alt="">
                <div class="hover-links">
                    <a href="" class="site-btn sb-light">Next</a>
                </div>
            </div>
        </div>

    </div>
    <!-- Page section end-->

    @endsection
