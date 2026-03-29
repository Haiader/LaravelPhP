<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/products',        'index')->name('products.index');
    Route::get('/products/create', 'create')->name('products.create');
    Route::post('/products',       'store')->name('products.store');
    
    // Exercise 4.2 additions
    Route::get('/products/{id}/edit',  'edit')->name('products.edit');
    Route::put('/products/{id}',       'update')->name('products.update');
    Route::delete('/products/{id}',    'destroy')->name('products.destroy');
});

Route::prefix('profile')
    ->controller(ProfileController::class)
    ->group(function () {
        Route::get('/{username}',          'show')->name('profile.show');
        Route::get('/{username}/{tab?}',   'tab')->name('profile.tab');
        Route::get('/{username}/follow',   'follow')->name('profile.follow');
    });

Route::fallback(function () {
    return response('Page not found.', 404);
});
