<?php

use App\Http\Controllers\NotepadController;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

// index
Route::view('/', 'home');

// notepad
Route::resource('notepad', NotepadController::class)->middleware('auth');

// configration
Route::get('/configuration', [ConfigurationController::class, 'index']);

// auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);