<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//fungsi database
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function index(){
        $cast = DB::table('cast')->get();
        // dd($cast);

        return view('cast.list', ['cast' => $cast]);
    }
    public function create(){
        return view('cast.add');
    }
    public function store(request $request){
        $validated = $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required'
        ]);
        DB::table('cast')->insert([
            'nama' => $request['nama'],
            'umur' => $request['umur'],
            'bio' =>  $request['bio']
        ]);
        return redirect('/cast');
    }
    public function show($id){
        $cast = DB::table('cast')->where('id', $id)->first();

        return view('cast.detail', ['cast' => $cast]);
    }

    public function edit($id){
        $cast = DB::table('cast')->where('id', $id)->first();

        return view("cast.edit", ['cast' => $cast]);
    }

    public function update(request $request, $id){
        $validated = $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required'
        ]);
        DB::table('cast')
            ->where('id', $id)
            ->update(
                ['nama'=>$request -> nama,
                'umur' => $request -> umur,
                'bio' => $request -> bio]
            );
        return redirect('/cast');
    }

    public function destroy($id){
        $cast = DB::table('cast')->where('id', $id)->delete();
        return redirect('/cast');
    }
}
