<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\genre;

class GenreController extends Controller
{
    public function index(){
        $genre = DB::table('genre')->get();

        return view('genre.list', ['genre' => $genre]);
    }

    public function create(){ 
        return view('genre.add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required'
        ]);
    
        DB::table('genre')->insert([
            'nama' => $request->input('nama')
        ]);
    
        return redirect('/genre');
    }

    public function show($id){ 
        $genre = genre::find($id);
        // dd($genre);

        return view('genre.detail', ['genre' => $genre]);
    }

    public function edit($id){ 
        $genre = DB::table('genre')->where('id', $id)->first(); 

        return view("genre.edit", ['genre' => $genre]);
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            'nama' => 'required'
        ]);
        DB::table('genre')
            ->where('id', $id)
            ->update(
                ['nama' => $request->input('nama')]
            );
        return redirect('/genre');
    }

    public function destroy($id){
        $genre = Genre::find($id);
        if ($genre->listFilms()->count() > 0) {
            return redirect()->back()->with('error', 'Genre tidak bisa dihapus karena memiliki film terkait.');
        }
        $genre->delete();

        return redirect()->route('genre.index')->with('success', 'Genre berhasil dihapus.');
    }
}
