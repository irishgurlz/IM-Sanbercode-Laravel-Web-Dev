@extends('layout.dashboard')

{{-- @section('judul')
Halaman Edit Cast
@endsection --}}

@section('content')
<div class="container-fluid mt--1">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-12 mb-5">
            <div class="card bg-gradient-default shadow mx-auto">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
                            <h2 class="text-white mb-0">Edit Cast</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/cast/{{$cast->id}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="exampleInputNama1">Nama</label>
                            <input type="text" name="nama" value= "{{$cast->nama}}" class="form-control" id="exampleInputNama1">
                            @error('nama')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUmur1">Umur</label>
                            <input type="text" name="umur" value= "{{$cast->umur}}" class="form-control" id="exampleInputUmur1">
                            @error('umur')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBio1">Bio</label>
                            <textarea type="text" name="bio" class="form-control" id="exampleInputBio1">{{$cast->bio}}</textarea>
                            @error('bio')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
