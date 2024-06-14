<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ClubController;

Route::get('/', function () {
    return view('mainpage');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'userMiddleware'])->group(function(){
    Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');
});

Route::middleware(['auth', 'adminMiddleware'])->group(function(){
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    // Application Routes 
    Route::prefix('admin/application')->name('admin.application.')->group(function() {
        Route::get('list', [ApplicationController::class, 'index'])->name('list');
        Route::get('add', [ApplicationController::class, 'create'])->name('add');
        Route::post('add', [ApplicationController::class, 'store'])->name('store');
        Route::get('edit/{application}', [ApplicationController::class, 'edit'])->name('edit');
        Route::post('edit/{application}', [ApplicationController::class, 'update'])->name('update');
        Route::delete('delete/{application}', [ApplicationController::class, 'destroy'])->name('delete');
    });

    // Club Routes 
    Route::prefix('admin/club')->name('admin.club.')->group(function() {
        Route::get('list', [ClubController::class, 'index'])->name('list');
        Route::get('add', [ClubController::class, 'create'])->name('add');
        Route::post('add', [ClubController::class, 'store'])->name('store');
        Route::get('edit/{club}', [ClubController::class, 'edit'])->name('edit');
        Route::post('edit/{club}', [ClubController::class, 'update'])->name('update');
        Route::delete('delete/{club}', [ClubController::class, 'destroy'])->name('delete');
    });

    // Event Routes 
    Route::prefix('admin/event')->name('admin.event.')->group(function() {
        Route::get('list', [EventController::class, 'index'])->name('list');
        Route::get('add', [EventController::class, 'create'])->name('add');
        Route::post('add', [EventController::class, 'store'])->name('store');
        Route::get('edit/{event}', [EventController::class, 'edit'])->name('edit');
        Route::post('edit/{event}', [EventController::class, 'update'])->name('update');
        Route::delete('delete/{event}', [EventController::class, 'destroy'])->name('delete');
    });

    // Student Routes 
    Route::prefix('admin/student')->name('admin.student.')->group(function() {
        Route::get('list', [StudentController::class, 'index'])->name('list');
        Route::get('add', [StudentController::class, 'create'])->name('add');
        Route::post('add', [StudentController::class, 'store'])->name('store');
        Route::get('edit/{student}', [StudentController::class, 'edit'])->name('edit');
        Route::post('edit/{student}', [StudentController::class, 'update'])->name('update');
        Route::delete('delete/{student}', [StudentController::class, 'destroy'])->name('delete');
    });
});
