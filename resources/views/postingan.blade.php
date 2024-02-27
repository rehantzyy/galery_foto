@extends('layouts.main')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">


    <!--Main layout-->
    <main class="mt-4 mb-5">
        <div class="container">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-md-8 mb-4">
                    <!--Section: Post data-mdb-->
                    <section class="border-bottom mb-4">
                        <img src="{{ asset('storage/' . $foto->lokasi_file) }}" class="img-fluid shadow-2-strong rounded mb-4"
                            alt="" />
                        <form action="/like/{{ $foto->id }}" method="post">
                            @csrf
                            <button type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M21.3 10.08A3 3 0 0 0 19 9h-4.56L15 7.57A4.13 4.13 0 0 0 11.11 2a1 1 0 0 0-.91.59L7.35 9H5a3 3 0 0 0-3 3v7a3 3 0 0 0 3 3h12.73a3 3 0 0 0 2.95-2.46l1.27-7a3 3 0 0 0-.65-2.46M7 20H5a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1h2Zm13-7.82l-1.27 7a1 1 0 0 1-1 .82H9v-9.79l2.72-6.12a2.11 2.11 0 0 1 1.38 2.78l-.53 1.43a2 2 0 0 0 1.87 2.7H19a1 1 0 0 1 .77.36a1 1 0 0 1 .23.82" />
                                </svg>
                                <span>{{ $foto->likes->count() }}</span>
                            </button>

                        </form>
                        @auth
                        @if (Auth::user()->id == $foto->user->id)
                        <div class="">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Edit Foto
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal edit foto</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/edit_foto/{{ $foto->id }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <textarea class="form-control" name="deskripsi" id="" cols="30" rows="10">{{ $foto->deskripsi }}</textarea>
                                                <select name="album" class="form-select" id="">
                                                    <option value="">pilih album</option>
                                                    @foreach (Auth::user()->albums as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama_album }}</option>
                                                    @endforeach
                                                </select>
                                                <button type="submit">edit</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        @endauth

                        <div class="row mt-4 mb-4">
                            <div class="col-lg-6 text-center text-lg-start mb-3 m-lg-0">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img (23).jpg"
                                    class="rounded shadow-1-strong me-2" height="35" alt="" loading="lazy" />

                                <span> Published <u>{{ $foto->created_at }}</u> by</span>
                                <a href="" class="text-dark">{{ $foto->user->name }}</a>

                            </div>

                        </div>
                    </section>

                    <section>
                        <p>
                            {{ $foto->deskripsi }}
                        </p>
                    </section>

                    <section>
                        <p class="text-center"><strong>Comment</strong></p>

                        <form action="/comments/{{ $foto->id }}" method='post'>
                            @csrf
                            <!-- Message input -->
                            <div class="form-outline mb-4" data-mdb-input-init>
                                <textarea class="form-control" name='isi_komentar' id="form4Example3" rows="4"></textarea>

                            </div>


                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4" data-mdb-ripple-init>
                                Publish
                            </button>
                        </form>
                    </section>
                    <!--Section: Comments-->
                    <section class="border-bottom mb-3">
                        <p class="text-center"><strong>Comments: {{ $foto->comments->count() }}</strong></p>

                        @forelse ($foto->comments as $item)
                            <div class="row mb-4">
                                <div class="col-2">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(24).jpg"
                                        class="img-fluid shadow-1-strong rounded" alt="" />
                                </div>
                                <div class="col-10">
                                    <p class="mb-2"><strong>{{ $item->user->name }}</strong></p>
                                    <p>
                                        {{ $item->isi_komentar }}
                                    </p>
                                    @auth
                                        @if (Auth::user()->id === $item->user->id)
                                            <div class="d-flex">
                                                <svg data-bs-toggle="modal" data-bs-target="#modal{{ $item->id }}"
                                                    xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M7 21q-.825 0-1.412-.587T5 19V6q-.425 0-.712-.288T4 5q0-.425.288-.712T5 4h4q0-.425.288-.712T10 3h4q.425 0 .713.288T15 4h4q.425 0 .713.288T20 5q0 .425-.288.713T19 6v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zm-7 11q.425 0 .713-.288T11 16V9q0-.425-.288-.712T10 8q-.425 0-.712.288T9 9v7q0 .425.288.713T10 17m4 0q.425 0 .713-.288T15 16V9q0-.425-.288-.712T14 8q-.425 0-.712.288T13 9v7q0 .425.288.713T14 17M7 6v13z" />
                                                </svg>
                                                <div class="modal" id="modal{{ $item->id }}" tabindex="-1">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Modal Delete</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Apakah Anda yakin Untuk Mengahapus Komentar!</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <form action="/delete_comment/{{ $item->id }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Hapus</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <svg data-bs-toggle="modal" data-bs-target="#edit{{ $item->id }}"
                                                    xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h8.925l-2 2H5v14h14v-6.95l2-2V19q0 .825-.587 1.413T19 21zm4-7v-2.425q0-.4.15-.763t.425-.637l8.6-8.6q.3-.3.675-.45t.75-.15q.4 0 .763.15t.662.45L22.425 3q.275.3.425.663T23 4.4q0 .375-.137.738t-.438.662l-8.6 8.6q-.275.275-.637.438t-.763.162H10q-.425 0-.712-.288T9 14m12.025-9.6l-1.4-1.4zM11 13h1.4l5.8-5.8l-.7-.7l-.725-.7L11 11.575zm6.5-6.5l-.725-.7zl.7.7z" />
                                                </svg>
                                                <div class="modal" id="edit{{ $item->id }}" tabindex="-1">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="/edit_comment/{{ $item->id }}"
                                                                    method='post'>
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <!-- Message input -->
                                                                    <div class="form-outline mb-4" data-mdb-input-init>
                                                                        <textarea class="form-control" name='isi_komentar' id="form4Example3" rows="4">{{ $item->isi_komentar }}</textarea>

                                                                    </div>


                                                                    <!-- Submit button -->
                                                                    <button type="submit"
                                                                        class="btn btn-primary btn-block mb-4"
                                                                        data-mdb-ripple-init>
                                                                        Publish
                                                                    </button>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                    @endauth

                                </div>
                            </div>
                        @empty
                            <p>Komentar Kosong Mohon Di Isi !</p>
                        @endforelse

                    </section>

                </div>
                < </div>

            </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
@endsection
