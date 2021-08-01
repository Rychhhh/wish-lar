@extends('layouts.main')

@section('container')
    <div class="justify-content-center">
        <h1>Hi {{ Auth::name()->name }}</h1>
    </div>
@endsection