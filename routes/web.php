<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'login']);
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'signup'])->name('signup');


Route::get('/professor', [TeacherController::class, 'index'])->name('teacher');

Route::get('/aluno', [StudentController::class, 'index'])->name('student');
