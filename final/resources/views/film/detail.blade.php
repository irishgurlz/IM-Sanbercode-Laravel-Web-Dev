@extends('layout.dashboard')


@section('content')
<img src="{{ asset('uploads/' . $film->poster) }}" class="img-fluid mt-3" style="width: 200px;">
<h1>{{ $film->judul }}</h1>
<p>{{ $film->ringkasan }}</p>
<a href="/film" class="btn btn-primary btn-xl mb-3">Kembali</a>

<hr>
<form method="POST" action="/kritik/{{ $film->id }}">
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
    <h2>List Komentar</h2>
    @forelse ($film->kritik as $item)
    <div class="card-comment mb-3">
        <div class="card-head-comment">
          {{$item->owner->name}}
        </div>
        <div class="card-body-comment">
          <h5 class="card-title-comment">Rating : {{$item->point}}/5</h5>
          <p class="card-text-comment">{{$item->content}}</p>
        </div>
      </div>
    @empty
        <h4>Belum ada komentar</h4>
    @endforelse
    <div class="form-group"width= 40px>
        <label for="film-rating">Beri rating untuk film ini</label>
        <select id="film-rating" name="point" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>
    <div>
        <textarea name="content" class="form-control" placeholder="Isi Komentar" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>
@endsection
