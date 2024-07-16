<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
     return view('xyz');
})->name('hari');

Route::get('/contact', function () {
    return view('abc');
})->name('ram');

// Route::get('/about', function () {
    // return view('xyz');
// });

