<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('home', 'home')->middleware('check1');

Route::middleware('check1')->group(function () {
    Route::view('about', 'about');
    Route::view('contact', 'about');
    Route::view('list', 'about');
    Route::view('student', 'about');
    Route::view('home', 'home');
});
