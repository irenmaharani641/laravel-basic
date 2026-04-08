<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', );
Route::get('/student', [StudentController::class, 'index']);
Route::get('/student/create', [StudentController::class, 'index']);



