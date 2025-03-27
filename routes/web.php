<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\BandController;

Route::get('/bands', [BandController::class, 'index']);
Route::get('/bands/create', [BandController::class, 'create']);
Route::get('/bands/about', [BandController::class, 'about']);
Route::post('/bands', [BandController::class, 'store']);
Route::get('/bands/{id}', [BandController::class, 'show']);
Route::get('/bands/{id}/edit', [BandController::class, 'edit']);
Route::patch('/bands', [BandController::class, 'update']);
Route::delete('/bands', [BandController::class, 'destroy']);
