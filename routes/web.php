<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\AdminCalendarController;

Route::get('/', function () {
    return view('pages.app');
});
Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar.index');

// put this in a middleware soon
Route::get('/secretary/calendar', [AdminCalendarController::class, 'index'])->name('admin.calendar.index');
Route::get('/secretary/announcements', function () {
    return view('pages.auth.announcements');
})->name('announcements');


Route::get('/about', function () {
    return view('pages.about');
})->name('about');


Route::get('/secretary', function () {
    return view('auth.admin');
})->name('auth.admin');

