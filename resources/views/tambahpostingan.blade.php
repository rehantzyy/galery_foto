@extends('layouts.main')
@section('content')
<form class="border border-5 border-black p-5" style="width: 26rem;margin-top:100px;">
    <!-- Name input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <input type="text" id="form4Example1" class="form-control" />
      <label class="form-label" for="form4Example1">Judul</label>
    </div>

    <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <input type="file" id="form4Example2" class="form-control" />
      <label class="form-label" for="form4Example2">Foto</label>
    </div>

    <!-- Message input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <textarea class="form-control" id="form4Example3" rows="4"></textarea>
      <label class="form-label" for="form4Example3">Deskripsi</label>
    </div>

    <!-- Checkbox -->


    <!-- Submit button -->
    <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Send</button>
  </form>
@endsection
