<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\StudentsController;

Route::get('/', [StudentsController::class,'index'])->name('students.index');
Route::get('/student', [StudentsController::class,'create'])->name('students.create');
Route::post('/student', [StudentsController::class,'store'])->name('students.store');
Route::get('/student/delete/{id}', [StudentsController::class,'destroy'])->name('students.delete');
Route::get('/student/{id}', [StudentsController::class,'view'])->name('students.view');
Route::post('/student/update', [StudentsController::class,'update'])->name('students.update');

