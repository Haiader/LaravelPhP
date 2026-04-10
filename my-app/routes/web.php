<?php

use App\Http\Controllers\app;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/b', function(){
    return view('welcome', [
        'name' => 'Haider',
        'age' => 20
    ]);
});


Route::get('/student', [StudentController::class, 'view_student']);


