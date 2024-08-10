<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\film;
use App\Models\genre;
use Illuminate\Support\Facades\DB;
use File;

class FilmController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index', 'show']);
    }
    public function index()
    {
        $film = film::all(); 
        return view('film.list', ['film' => $film]);
    }

    public function create()
    {
        $genre = genre::all();
        return view('film.add', ['genre' => $genre]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'poster' => 'required|mimes:jpg,png,jpeg|max:2048',
            'genre_id' => 'required',
        ]);

        $fileName = time() . '.' . $request->poster->extension();
        $request->poster->move(public_path('uploads'), $fileName);

        $film = new film;
        $film->judul = $request->input('judul');
        $film->ringkasan = $request->input('ringkasan');
        $film->tahun = $request->input('tahun');
        $film->genre_id = $request->input('genre_id');
        $film->poster = $fileName;

        $film->save();

        return redirect('/film');
    }

    public function show(string $id)
    {
        $film = film::find($id);
        return view('film.detail', ['film' => $film]);
    }

    public function edit($id)
    {
        $film = film::find($id);
        $genre = genre::all();
        return view('film.edit', ['film'=>$film, 'genre'=>$genre]);
    }

    public function update(Request $request, string $id)
{
    $request->validate([
        'judul' => 'required',
        'ringkasan' => 'required',
        'tahun' => 'required',
        'poster' => 'mimes:jpg,png|max:2048',
        'genre_id' => 'required',
    ]);

    $film = film::find($id);
    
    if ($request->hasFile('poster')) {
        if ($film->poster && File::exists(public_path('uploads/' . $film->poster))) {
            File::delete(public_path('uploads/' . $film->poster));
        }
        
        $fileName = time() . '.' . $request->poster->extension();
        $request->poster->move(public_path('uploads'), $fileName);
        $film->poster = $fileName;
    }

    $film->judul = $request->input('judul');
    $film->ringkasan = $request->input('ringkasan');
    $film->tahun = $request->input('tahun');
    $film->genre_id = $request->input('genre_id');

    $film->save();

    return redirect('/film');

    }
    public function destroy($id) {
        $film = film::find($id);
        $film->kritik()->delete();

        if ($film->poster && File::exists(public_path('uploads/' . $film->poster))) {
            File::delete(public_path('uploads/' . $film->poster));
        }

        $film->delete();
    
        return redirect('/film')->with('success', 'Film and associated comments deleted successfully');
    }
    
}
