<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;

Route::get('/', function () {
    return view('pages.app');
});
Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar.index');


Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/secretary', function () {
    return view('auth.admin');
})->name('auth.admin');

