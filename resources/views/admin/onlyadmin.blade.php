@extends('layouts.main')

@section('title')
    Admin
@endsection

@section('container')
<table class="table table-success table-striped mt-5 text-center">
    <thead>
    <tr>
      <th scope="col" data-aos="fade-right">No</th>
      <th scope="col" data-aos="fade-right">Name</th>
      <th scope="col" data-aos="fade-right">Email</th>
      <th scope="col" data-aos="fade-right">Password</th>
      <th colspan="0" data-aos="fade-right">Role</th>
      <th colspan="3" data-aos="fade-right">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item=>$value)
        <tr>
            <td data-aos="fade-up">{{ $loop->iteration }}</td>
            <td class="ms-3" data-aos="fade-up">{{ $value->name }}</td>
            <td data-aos="fade-up">{{ $value->email }}</td>
            <td data-aos="fade-up">{{ $value->password }}</td>
            <td data-aos="fade-up">{{ $value->role }}</td>

            {{-- Form Edit --}}
            <td data-aos="fade-up">
              <a class="btn btn-primary" href="{{ url('admin/'.$value->id.'/edit') }}">Edit
              </a>
            </td>
            {{-- Form Delete --}}
            <td data-aos="fade-up">
              <form action="{{ url('admin/'.$value->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>
            </td>

        </tr>
    @endforeach
  </tbody>
  </table>
@endsection
