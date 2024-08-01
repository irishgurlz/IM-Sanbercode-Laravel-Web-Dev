<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/data-tables', [AuthController::class, 'data']);
Route::get('/table', [AuthController::class, 'table']);