<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'index'])-> name('students');
Route::get('/students/{student}/view', [StudentController::class, "show"])->name("student.show");

