<?php

use App\Http\Controllers\SzavakController;
use App\Http\Controllers\TemaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/szavak',[SzavakController::class,'getSzavak']);
Route::get('/szavak/tema',[SzavakController::class,'byTema']);
Route::get('/tema',[TemaController::class,'getTemak']);
