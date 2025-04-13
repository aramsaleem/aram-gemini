<?php

use App\Http\Controllers\GeminiController;
use Illuminate\Support\Facades\Route;

Route::get('/{prompt}', [GeminiController::class, 'generateContent']);

Route::get('/', function () {
    return view('welcome');
});
