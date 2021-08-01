@extends('layouts.main')

@section('title')
    Edit
@endsection

@section('container')
<form action="{{ url('admin/'.$updateAdmin->id) }}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    {{-- Name --}}
    <div class="mb-3">
      <label>Name</label>
      <input type="text" name="name" value="{{ $updateAdmin->name }}">
      <div id="emailHelp" class="form-text" style="color: white">We'll never share your email with anyone else.</div>
    </div>

    {{-- Email  --}}
    <div class="mb-3">
      <label>Email</label>
      <input type="text" name="email" value="{{ $updateAdmin->email }}">
    </div>

    {{-- Password --}}
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" value="{{ $updateAdmin->password }}">
    </div>

    <div class="mb-3">
        <label>Role :</label>
        <input type="text" name="role" value="{{ $updateAdmin->role }}">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection 