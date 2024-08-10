<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//fungsi database
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function index(){
        // DB::table('cast') adalah bagian dari Query Builder Laravel yang menunjukkan bahwa operasi berikutnya 
        // akan dilakukan pada tabel cast.
        // get() adalah metode yang digunakan untuk mengambil semua baris dari tabel yang ditentukan. Ini akan 
        // mengembalikan koleksi berisi semua data dari tabel cast.
        $cast = DB::table('cast')->get();
        // dd($cast);

        return view('cast.list', ['cast' => $cast]);
    }
    public function create(){ //Form tambah
        return view('cast.add');
    }
    public function store(request $request){ ////untuk kirim data ke database
        // berfungsi melakukan validasi jika title kosong atau title tidak boleh sama dengan data 
        // yang telah terinput maka akan menampilkan error dan jika body inputan kosong maka akan menampilkan error
        $validated = $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required'
        ]);

        //berfungsi melakukan insert data pada kolom title dan body berdasarkan request inputan attribute name ‘title’ 
        // dan ‘body’ seperti pada sintax sql INSERT INTO post (title, body) VALUES ($request[‘title’], $request[‘body’]);
        // setelah proses insert berhasil maka akan menuju ke URL /cast
        DB::table('cast')->insert([
            'nama' => $request['nama'],
            'umur' => $request['umur'],
            'bio' =>  $request['bio']
        ]);
        return redirect('/cast');
    }
    public function show($id){ //Detail cast berdasarkan id
        $cast = DB::table('cast')->where('id', $id)->first(); //Query Builder dari Laravel untuk mengakses database.

        return view('cast.detail', ['cast' => $cast]);
    }

    public function edit($id){ //Form Update (edit) Cast
        $cast = DB::table('cast')->where('id', $id)->first(); //Query Builder dari Laravel untuk mengakses database.

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
        $cast = DB::table('cast')->where('id', $id)->delete(); //Query Builder dari Laravel untuk mengakses database.
        return redirect('/cast');
    }
}
