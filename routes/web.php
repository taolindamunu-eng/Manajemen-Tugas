<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\CatatanTugasController;
use App\Http\Controllers\LogAktivitasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

// HALAMAN AWAL

Route::get('/', [DashboardController::class, 'index'])->name('welcome');

// CRUD USERS
Route::resource('users', UserController::class);

// CRUD TUGAS
Route::resource('tugas', TugasController::class);

// CRUD KATEGORI
Route::resource('kategori', KategoriController::class);

// CRUD KOMENTAR
Route::resource('komentar', CatatanTugasController::class);

// LOG (read only)
Route::get('log', [LogAktivitasController::class, 'index'])->name('log.index');