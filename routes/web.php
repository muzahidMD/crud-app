<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

// Display all students
Route::get('/students', [studentController::class, 'index'])->name('student.index');
// Route to display the form for creating a student
Route::get('/student/create', [studentController::class, 'create'])->name('student.create');
// Store a student in the students table
Route::post('/students', [studentController::class, 'store'])->name('student.store');

