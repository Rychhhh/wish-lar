@extends('layouts.main')


@section('title')
    Tambah Data
@endsection

@section('container')
<form class="text-center" method="POST" action="{{ url('pembeli') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label>Name</label>
      <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="mb-3">
      <label>Prize</label>
      <input type="text" name="prize" id="prize" class="form-control">
    </div>
    <br>
    <div class="mb-3">
      <input type="file" name="product" id="product" class="form-control">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </form>
@endsection