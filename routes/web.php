<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\PrakerjaController;

// Route::middleware('guests')->group(function() {
    Route::get('/', [AuthController::class,'index'])->name('login');
    Route::get('register',[AuthController::class, 'daftar'])->name('register');
    Route::post('register.post',[AuthController::class, 'register'])->name('register.post');
    Route::post('login.post',[AuthController::class, 'login'])->name('login.post');
// });

    Route::get('home',[HomeController::class, 'index'])->name('home');
    Route::get('tambah.data',[HomeController::class, 'tambah'])->name('tambah');
    Route::post('tambah.save',[HomeController::class, 'save'])->name('save');
    Route::get('edit.data/{id}',[HomeController::class, 'edit'])->name('edit');
    Route::post('update.data/{id}',[HomeController::class, 'update'])->name('update');
    Route::get('hapus.data',[HomeController::class, 'hapus'])->name('hapus');

    // prakerja
    Route::get('prakerja',[PrakerjaController::class, 'index'])->name('prakerja');
    Route::get('prakerja.tambah',[PrakerjaController::class, 'tambah'])->name('prakerja-tambah');
    Route::post('prakerja.create',[PrakerjaController::class, 'proses_tambah'])->name('prakerja-create');
    Route::get('prakerja.edit/{id}',[PrakerjaController::class, 'edit'])->name('prakerja-edit');
    Route::post('prakerja.update/{id}',[PrakerjaController::class, 'update'])->name('prakerja-update');