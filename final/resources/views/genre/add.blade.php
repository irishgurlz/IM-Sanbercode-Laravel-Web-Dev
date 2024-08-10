@extends('layout.dashboard')

@section('content')
<div class="container-fluid mt--1">
    <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-10 col-sm-12 mb-5">
            <div class="card bg-gradient-default shadow mx-auto">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
                            <h2 class="text-white mb-0">Add New Genre</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/genre" method="POST">
                        @csrf
                        @if($errors->any())
                        <div class="alert alert-danger">
                          <ul class="mb-0">
                            @foreach($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                        </div>
                      @endif  
                        <div class="form-group">
                            <label for="exampleInputNama1">Nama Genre</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputNama1">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
