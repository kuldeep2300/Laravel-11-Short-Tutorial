<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(StudentController::class)->group(function () {
    Route::get('show', 'show');
    Route::get('add', 'add');
    Route::get('delete', 'delete');
    Route::get('about/{name}', 'about');
});

// Route::get('about/{name}', [StudentController::class, 'about']);