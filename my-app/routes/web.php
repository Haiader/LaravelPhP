<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\LogicController;
use App\Http\Controllers\PageController;

// ── Existing routes ──────────────────────────────────────────────────────────
Route::get('/students', [StudentController::class, 'index'])->name('students');
Route::get('/students/{student}/view', [StudentController::class, 'show'])->name('student.show');
Route::get('/www', function () { return view('WEB.www'); });

// ── Lab 5 – Exercise 1: Passing Data ────────────────────────────────────────
Route::get('/demo', [DemoController::class, 'showData'])->name('demo');

// ── Lab 5 – Exercise 2: Blade Control Structures ────────────────────────────
Route::get('/logic', [LogicController::class, 'show'])->name('logic');

// ── Lab 5 – Exercise 3: Layout & Personalisation ────────────────────────────
Route::get('/admin', [PageController::class, 'admin'])->name('admin');
Route::get('/user',  [PageController::class, 'user'])->name('user');

// ── Lab 5 – Exercise 4: Partial Views ────────────────────────────────────────
Route::get('/home',  [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

// ── Lab 5 – Exercise 5: Blade Components ─────────────────────────────────────
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
