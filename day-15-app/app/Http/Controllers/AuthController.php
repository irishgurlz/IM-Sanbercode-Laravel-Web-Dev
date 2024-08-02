<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {
        return view('register');
    }

    public function welcome(Request $request){
        $first = $request->input('first_name');
        $last = $request->input('last_name');
        return view('welcome', ['first_name' => $first, 'last_name' => $last]);
    }
    public function data(){
        return view('data-table');
    }

    public function table(){
        return view('table');
    }
}
