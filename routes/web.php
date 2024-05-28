<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;

Route::get('/', [AuthController::class,'index'])->name('/');
Route::get('register',[AuthController::class, 'daftar'])->name('register');
Route::post('register.post',[AuthController::class, 'register'])->name('register.post');
Route::post('login',[AuthController::class, 'login'])->name('login');

Route::get('home',[HomeController::class, 'index'])->name('home');
Route::get('tambah.data',[HomeController::class, 'tambah'])->name('tambah');
Route::post('tambah.save',[HomeController::class, 'save'])->name('save');
Route::get('edit.data/{id}',[HomeController::class, 'edit'])->name('edit');
Route::post('update.data/{id}',[HomeController::class, 'update'])->name('update');
Route::get('hapus.data/{id}',[HomeController::class, 'hapus'])->name('hapus');