@extends('layout.master')

@section('judul')
Halaman Tambah Cast
@endsection

@section('content')
<form action="/cast" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleInputNama1">Nama</label>
        <input type="text" name="nama" class="form-control" id="exampleInputNama1">
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputUmur1">Umur</label>
        <input type="text" name="umur" class="form-control" id="exampleInputUmur1">
        @error('umur')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputBio1">Bio</label>
        <textarea type="text" name="bio" class="form-control" id="exampleInputBio1"></textarea>
        @error('bio')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
