<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;

Route::get('/data-tables', [AuthController::class, 'data']);
Route::get('/table', [AuthController::class, 'table']);

//CRUD cast

//Form tambah
Route::get('/cast/create', [CastController::class, 'create']);
//untuk kirim data ke database
Route::post('/cast', [CastController::class, 'store']);

//Read
//tampilkan table
Route::get('/cast', [CastController::class, 'index']);
//Detail cast berdasarkan id
Route::get('/cast/{cast_id}', [CastController::class, 'show']); 

//Update
//Form Update Cast
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);
//update data ke database berdasarkan id
Route::put('/cast/{cast_id}',[CastController::class, 'update']);

//Delete
Route::delete('/cast/{cast_id}',[CastController::class, 'destroy']);
