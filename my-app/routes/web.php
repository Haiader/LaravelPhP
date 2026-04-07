<?php

use App\Http\Controllers\app;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome', [
        'name' => 'Haider',
        'age' => 20
    ]);
});


Route::get('/a',function(){
    return view('calculator');
});
