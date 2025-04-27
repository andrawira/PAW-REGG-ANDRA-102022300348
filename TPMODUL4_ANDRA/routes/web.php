<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// 1. Menampilkan semua user
Route::get('/users/index', [UserController::class, 'index']);
Route::get('/users', [UserController::class, 'index'])->name('users.index');

// 2. Menampilkan form create user
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

// 3. Menyimpan user baru
Route::post('/users', [UserController::class, 'store'])->name('users.store');

// 4. Menampilkan form edit user
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');

// 5. Update data user
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');

// 6. Hapus user
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');