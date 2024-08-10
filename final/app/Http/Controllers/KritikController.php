<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\kritik;

class KritikController extends Controller
{
    public function store(Request $request, $film_id)
    {
        $request->validate([
            'content' => 'required|min:5'
        ]);

        $userid = Auth::id();

        $kritik = new kritik;
        $kritik->content = $request->input('content');
        $kritik->point = $request->input('point');
        $kritik->user_id = $userid;
        $kritik->film_id = $film_id;

        $kritik->save();

        return redirect('/film/' . $film_id);
    }
    
}
