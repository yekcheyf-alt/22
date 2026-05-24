<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    //student management
    Route::get('students', [\App\Http\Controllers\studentmngtController::class, 'index'])->name('student.index');
    Route::get('students/create', [\App\Http\Controllers\studentmngtController::class, 'create'])->name('student.create');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    //employee management
    Route::get('employees', [\App\Http\Controllers\EmployeeController::class, 'index'])->name('employees.index');
    Route::get('employees/create', [\App\Http\Controllers\EmployeeController::class, 'create'])->name('employee.create');
    Route::post('employees', [\App\Http\Controllers\EmployeeController::class, 'store'])->name('employees.store');
    Route::get('employees/{employee}', [\App\Http\Controllers\EmployeeController::class, 'show'])->name('employee.show');
    Route::get('employees/{employee}/edit', [\App\Http\Controllers\EmployeeController::class, 'edit'])->name('employees.edit');
    Route::put('employees/{employee}', [\App\Http\Controllers\EmployeeController::class, 'update'])->name('employees.update');
    Route::delete('employees/{employee}', [\App\Http\Controllers\EmployeeController::class, 'destroy'])->name('employees.delete');
});
