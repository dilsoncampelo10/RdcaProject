<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\LearningCenterController;
use Illuminate\Support\Facades\Route;
//Grupo de rotas
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'signup'])->name('signup');
Route::post('/', [LoginCOntroller::class, 'authenticate'])->name('signin');

Route::get('/professor', [TeacherController::class, 'index'])->name('teacher');
//->middleware('auth');
Route::post('/professor', [LearningCenterController::class, 'store'])->name('register.center');

Route::get('/aluno', [StudentController::class, 'index'])->name('student');
