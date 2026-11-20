<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\CheckIfIsAdmin;
use Illuminate\Support\Facades\Route;




Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/user/add', [UserController::class, 'add'])->name('user.add');
    Route::get('/user/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
    Route::get('/user/show/{user}', [UserController::class, 'show'])->name('user.show');
    Route::post('/user/created', [UserController::class, 'created'])->name('user.created');
    Route::put('/user/update/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/destroy/{user}', [UserController::class, 'destroy'])->name('user.destroy')->middleware(CheckIfIsAdmin::class);

});


Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';