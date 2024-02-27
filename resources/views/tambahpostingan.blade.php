@extends('layouts.main')
@section('content')
<form action="{{ route('tambahpostingan') }}" enctype="multipart/form-data" method="post" class="border border-5 border-black p-5" style="width: 26rem;margin-top:100px;">
    @csrf
    <!-- Name input -->
    <div class="text-center mb-3">
    <b style="font-size: 30px">Upload Foto</b>
    </div>
    <div data-mdb-input-init class="form-outline mb-4">
      <input type="text" name="judul" id="form4Example1" class="form-control" />
      <label class="form-label" for="form4Example1">Judul</label>
      @error('judul')
      <small style="color:red">
        {{ $message }}
      </small>
      @enderror
    </div>

    <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <input type="file" name="foto" id="form4Example2" class="form-control" />
      <label class="form-label" for="form4Example2">Foto</label>
      @error('foto')
      <small style="color:red">
        {{ $message }}
      </small>
      @enderror
    </div>

    <!-- Message input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <textarea class="form-control" name='deskripsi' id="form4Example3" rows="4"></textarea>
      <label class="form-label" for="form4Example3">Deskripsi</label>
      @error('deskripsi')
      <small style="color:red">
        {{ $message }}
      </small>
      @enderror

    </div>
    <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Upload</button>
    </form>


    <!-- Checkbox -->


    <!-- Submit button -->
@endsection
