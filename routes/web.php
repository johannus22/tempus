<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});
Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');
Route::get('/about', function () {
    return view('about');
})->name('about');

