<?php

use App\Http\Controllers\app;
use Illuminate\Support\Facades\Route;

Route::get('/',          [app::class, 'index']);
Route::post('/calculate', [app::class, 'calculate']);
