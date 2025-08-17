<?php

use App\Http\Controllers\AiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/returnresponse', [AiController::class,('returns')]);
Route::get('/get-data', [AiController::class, 'getData']);
