@extends('layouts.main')

@section('title')
    Pembeli
@endsection

@section('container')
    
    <h1 class="text-center mt-5" data-aos="fade-left">Berikut Product Yang Tersedia Di Toko Kami</h1>
    <a href="{{ url('pembeli/create') }}" class="btn btn-success ms-auto">Tambah Data</a>
    <table class="table table-dark mt-5 text-center" data-aos="fade-up">
        <thead>
            <tr>
              <th scope="col2" data-aos="fade-left">No</th>
              <th scope="col"  data-aos="fade-left">Name</th>
              <th scope="col"  data-aos="fade-left">Prize</th>
              <th scope="col"  data-aos="fade-left">Product</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($datas as $item=>$value)
            <tr>
              <th data-aos="fade-right">{{ $loop->iteration }}</th>
              <td data-aos="fade-right">{{ $value->name }}</td>
              <td data-aos="fade-right">{{ $value->prize }}</td>
              <td data-aos="fade-right">
                <a href="{{ asset('storage/thumbnail/'.$value->product) }}" target="_blank"><img src="{{ asset('storage/thumbnail/'.$value->product) }}" alt="Foto" width="100px" height="100px"></img></a>
              </td>
            </tr>
            @endforeach
         </tbody>
    </table>
@endsection