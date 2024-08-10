@extends('layout.dashboard')

@section('content')
<a href="/genre/create" class="btn btn-default btn-xl mb-3">Add New Genre</a>

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col" style="width: 5%;">ID</th>
        <th scope="col" style="width: 30%;">Nama</th>
        <th scope="col" style="width: 30%;">Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($genre as $key => $value)
          <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $value->nama }}</td>
            <td>
              <form action="genre/{{ $value->id }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="/genre/{{ $value->id }}" class="btn btn-primary btn-sm">Details</a>
                <a href="/genre/{{ $value->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
              </form>
            </td>
          </tr>
      @empty
          <tr>
            <td colspan="3">Tidak ada genre</td>
          </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection
