@extends('layout.dashboard')

{{-- @section('judul')
Halaman List genre
@endsection --}}

@section('content')
<h1>{{$genre -> nama}}</h1>
    {{-- {{dd($genre ->listFilms)}} --}}
    <a href="/genre" class="btn btn-primary btn-xl mb-3">Kembali</a>
    <div class="row">
        @forelse ($genre->listFilms as $item)
        <div class="col-md-4 mb-4">
            <div class="card h-100" style="object-fit: cover; width: 90%;">
                <img src="{{ asset('uploads/' . $item->poster) }}" class="card-img-top" style="object-fit: cover; height: 500px;" alt="{{ $item->judul }}"> 
                <div class="card-body">
                    <h5 class="card-title">{{ $item->judul }}</h5>
                    <a href="/film/{{ $item->id }}" class="btn btn-primary btn-block">Detail</a>
                </div>
            </div>
        </div>
        @empty
            <h3>Tidak ada film</h3>
        @endforelse
    <div>
@endsection