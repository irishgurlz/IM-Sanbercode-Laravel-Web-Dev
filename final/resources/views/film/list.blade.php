@extends('layout.dashboard')


@section('content')
<div class="row ml-1 mt--1">
    @auth
        <a href="/film/create" class="btn btn-default btn-xl mb-3">Add New Film</a>
    @endauth
</div>
<div class="row mt-2">
    @forelse ($film as $item)
    <div class="col-md-3 mb-3">
        <div class="card h-100" style="object-fit: cover; width: 100%;">
            <img src="{{ asset('uploads/' . $item->poster) }}" class="card-img-top" style="object-fit: cover; height: 400px;" alt="{{ $item->judul }}"> 
            {{-- Image dibuat tinggi karena poster film --}}
            <div class="card-body d-flex flex-column">
            <h5 class="card-title">{{ $item->judul }}</h5>
            <span class="badge badge-info mb-2">{{ $item->genre->nama }}</span>
            <a href="/film/{{ $item->id }}" class="btn btn-primary btn-block mt-auto">Detail</a>
            @auth
            <div class="row mt-2">
                <div class="col">
                <a href="/film/{{ $item->id }}/edit" class="btn btn-warning btn-block">Edit</a>
                </div>
                <div class="col">
                <form action="/film/{{ $item->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger btn-block">
                </form>
                </div>
            </div>
            @endauth
            </div>
        </div>
    </div>

    @empty
    <div class="col-12">
        <p>No films available.</p>
    </div>
    @endforelse
</div>

@endsection
