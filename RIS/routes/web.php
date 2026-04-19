<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskerController;

Route::get('/',[TaskerController::class , 'index']) -> name('tasker.index');
