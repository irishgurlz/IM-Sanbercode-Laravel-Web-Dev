@extends('layout.master')

@section('judul')
Halaman List Cast
@endsection

@section('content')
<a href="/cast/create" class="btn btn-primary btn-sm mb-3">Add</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Umur</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($cast as $key => $value)
        <tr>
          <td>{{ $key + 1 }}</td>
          <td>{{ $value->nama }}</td>
          <td>{{ $value->umur }}</td>
          <td>
            <form action="cast/{{ $value->id }}" method ="POST">
              @csrf
              @method('DELETE')
              <a href="/cast/{{ $value->id }}" class="btn btn-primary btn-sm">Details</a>
              <a href="/cast/{{ $value->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
              <input type="submit" value="Delete" class = "btn btn-danger btn-sm">
            </form>
          </td>
        </tr>
    @empty
        <tr>
          <td>Tidak ada data</td>
        </tr>
    @endforelse
  </tbody>
</table>
@endsection
