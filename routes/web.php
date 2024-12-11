<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile/{nama}/{kelas}/{npm}', [ProfileController::class, 'profile']);
// Route untuk halaman profile
Route::get('/user/profile', [UserController::class, 'profile']);
// Route untuk halaman create
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

// Route untuk menampilkan form create user
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

// Route untuk menyimpan data user
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

// Route untuk menampilkan profile user setelah data disimpan
Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');

// Route untuk menampilkan halaman edit user
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');

// Route untuk mengupdate data user
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
