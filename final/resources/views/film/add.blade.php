@extends('layout.dashboard')
{{-- @section('judul')
    <h2 class= "judul-page" >HALAMAN TAMBAH FILM<h2>
@endsection --}}
@section('content')
<div class="container-fluid mt--1">
    <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-10 col-sm-12 mb-5">
            <div class="card bg-gradient-default shadow mx-auto">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
                            <h2 class="text-white mb-0">Add New Film</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/film" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputJudul1">Judul Film</label>
                            <input type="text" name="judul" class="form-control" id="exampleInputJudul1" value="{{ old('judul') }}">
                            @error('judul')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputRingkasan1">Ringkasan</label>
                            <textarea type="text" name="ringkasan" class="form-control" id="exampleInputRingkasan1" rows = "10" value="{{ old('ringkasan') }}"></textarea>
                            @error('ringkasan')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputTahun1">Tahun</label>
                            <input type="text" name="tahun" class="form-control" id="exampleInputTahun1" value="{{ old('tahun') }}">
                            @error('tahun')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputGenre1">Genre Film</label>
                            <select name="genre_id" class="form-control" id="exampleInputGenre1">
                                <option value="">Pilih Genre</option>
                                @forelse ($genre as $item)
                                    <option value="{{ $item->id }}" {{ old('genre_id') == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                                @empty
                                    <option value="">Tidak Ada Genre Silahkan Tambahkan</option>
                                @endforelse
                            </select>
                            @error('genre_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="exampleInputPoster1">Image</label>
                            <input type="file" name="poster" class="form-control-file" id="exampleInputImage1">
                            @error('poster')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Add New Film</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
