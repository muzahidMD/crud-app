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
Route::get('/students', [studentController::class, 'index'])->name('students.index');
// Route to display the form for creating a student
Route::get('/students/create', [studentController::class, 'create'])->name('students.create');
// Store a student in the students table
Route::post('/students', [studentController::class, 'store'])->name('students.store');
// Show details of a specific student by id
Route::get('/students/{student}', [studentController::class, 'show'])->name('students.show');
// Edit on existing student
Route::get('/students/{student}/edit', [studentController::class, 'edit'])->name('students.edit');
// Update student
Route::put('/students/{student}', [studentController::class, 'update'])->name('students.update');