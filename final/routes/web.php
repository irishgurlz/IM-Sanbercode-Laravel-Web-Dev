<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\KritikController;

// Authentication Routes
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Public Routes
Route::get('/', function() {
    return view('layout.home');
});

// Routes with Authentication Middleware
Route::middleware(['auth'])->group(function() {
    // CRUD Cast
    Route::get('/cast/create', [CastController::class, 'create']);
    Route::post('/cast', [CastController::class, 'store']);
    Route::get('/cast', [CastController::class, 'index']);
    Route::get('/cast/{cast_id}', [CastController::class, 'show']);
    Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);
    Route::put('/cast/{cast_id}', [CastController::class, 'update']);
    Route::delete('/cast/{cast_id}', [CastController::class, 'destroy']);

    // CRUD Genre
    Route::resource('genre', GenreController::class);

    // Kritik Routes
    Route::post('/kritik/{film_id}', [KritikController::class, 'store']);
});

// CRUD Film
Route::resource('film', FilmController::class);
