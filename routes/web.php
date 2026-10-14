<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;


// ==========================
// LOGIN
// ==========================

Route::get('/', [AuthController::class, 'login'])
    ->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);


// ==========================
// REGISTER
// ==========================

Route::get('/register', [AuthController::class, 'register'])
    ->name('register');

Route::post('/register', [AuthController::class, 'storeRegister']);


// ==========================
// LOGOUT
// ==========================

Route::post('/logout', [AuthController::class, 'logout']);


// ==========================
// ADMIN
// ==========================

Route::middleware('admin')->group(function () {

    // Dashboard Admin
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Tambah Menu
    Route::get('/menu/create', [MenuController::class, 'create'])
        ->name('menu.create');

    // Simpan Menu
    Route::post('/menu', [MenuController::class, 'store'])
        ->name('menu.store');

    // Halaman Edit Menu
    Route::get('/menu/{menu}/edit', [MenuController::class, 'edit'])
        ->name('menu.edit');

    // Update Menu
    Route::put('/menu/{menu}', [MenuController::class, 'update'])
        ->name('menu.update');

    // Hapus Menu
    Route::delete('/menu/{menu}', [MenuController::class, 'destroy'])
        ->name('menu.destroy');

});


// ==========================
// USER
// ==========================

Route::get('/home', [HomeController::class, 'index']);


// ==========================
// MENU
// ADMIN & USER BISA MELIHAT
// ==========================

Route::get('/menu', [MenuController::class, 'index'])
    ->name('menu.index');


// ==========================
// CONTACT
// ==========================

Route::get('/contact', [ContactController::class, 'index']);


// ==========================
// ABOUT
// ==========================

Route::get('/about', [AboutController::class, 'index']);