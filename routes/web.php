<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogVisitorInfo;

// Home route with middleware
Route::get('/', function () {
    return view('home');
})->middleware(LogVisitorInfo::class)->name('home'); // Name the home route

// Lab routes with middleware and names
Route::get('/lab1', function () {
    return view('lab1');
})->middleware(LogVisitorInfo::class)->name('lab1');

Route::get('/lab2', function () {
    return view('lab2');
})->middleware(LogVisitorInfo::class)->name('lab2');

Route::get('/lab3', function () {
    return view('lab3');
})->middleware(LogVisitorInfo::class)->name('lab3');

Route::get('/lab4', function () {
    return view('lab4');
})->middleware(LogVisitorInfo::class)->name('lab4');
