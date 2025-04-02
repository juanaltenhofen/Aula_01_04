<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PhoneController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users/store', [UserController::class, 'store']);
Route::get('/users/{user}', [UserController::class, 'details'])->name('users.show');
Route::put('/user/{user}', [UserController::class, 'update']);
Route::delete('/user/{user}', [UserController::class, 'delete']);

Route::post('/users/{user}/phones', [PhoneController::class, 'store'])->name('phones.store');
Route::delete('/phones/{phone}', [PhoneController::class, 'destroy'])->name('phones.destroy');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
