@extends('layouts.main')
@section('content')

    <section class="h-100 gradient-custom-2">

        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-start align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    @if (Auth::check())
                    <?php $user = Auth::user(); ?>
                    <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                        <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                                alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                                style="width: 150px; z-index: 1">
                            <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                                style="z-index: 1;">
                                Edit profile
                            </button>
                            <a href ="/tambahpostingan" style="z-index: 1;"><button type="button"
                                    class="btn btn-outline-dark mt-1" data-mdb-ripple-color="dark"> tambah postingan
                                    </button></a>

                        </div>
                        <div class="mx-4" style="margin-top: 130px;">
                            <h5>{{ $user->name }}</h5>
                            <p>{{$user->address }}</p>
                        </div>
                    </div>

                    @endif

                    <div class="card">

                        <div class="p-4 text-black" style="background-color: #f8f9fa;">
                            <div class="d-flex justify-content-end text-center py-1">
                                <div>
                                <p class="mb-1 h5">{{ $user->photos->count() }}</p>
                                    <p class="small text-muted mb-0">Photos</p>
                                </div>

                            </div>
                        </div>
                        <div class="card-body p-4 text-black">

                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <p class="lead fw-normal mb-0">Recent photos</p>
                                <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p>
                            </div>
                            <div class="row g-2">

                            @forelse ($foto as $item)
                            <div class="col mb-2">
                                <a href="postingan/{{ $item->id }}"><img src="{{ asset('storage/'.$item->lokasi_file) }}"
                                    alt="image 1" class="w-100 rounded-3"></a>

                            </div>

                            @empty
                            <p>data kosong</p>
                            @endforelse


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
