@extends('layout.dashboard')

{{-- @section('judul')
Halaman List Cast
@endsection --}}

@section('content')
<h1>{{$cast -> nama}}</h1>
<p>{{$cast -> bio}}</p>
<a href="/cast" class="btn btn-primary btn-xl mb-3">Kembali</a>
@endsection