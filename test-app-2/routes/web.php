<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'home']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/welcome', [AuthController::class, 'welcome']);
