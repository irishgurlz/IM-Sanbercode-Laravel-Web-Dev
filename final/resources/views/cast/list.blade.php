@extends('layout.dashboard')

@section('content')
<a href="/cast/create" class="btn btn-default btn-xl mb-3">Add New Cast</a>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col"  style="width: 5%;">ID</th>
        <th scope="col" style="width: 30%;">Nama</th>
        <th scope="col" style="width: 10%;">Umur</th>
        <th scope="col" style="width: 25%;">Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($cast as $key => $value)
          <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->umur }}</td>
            <td>
              <form action="cast/{{ $value->id }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="/cast/{{ $value->id }}" class="btn btn-primary btn-sm">Details</a>
                <a href="/cast/{{ $value->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
              </form>
            </td>
          </tr>
      @empty
          <tr>
            <td colspan="4">Tidak ada cast</td>
          </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection
