<?php

use App\Http\Controllers\NotepadController;
use App\Http\Controllers\ConfigurationController;
use Illuminate\Support\Facades\Route;

// index
Route::view('/', 'home');

// notepad
Route::get('/notepad', [NotepadController::class, 'index']);

// configration
Route::get('/configuration', [ConfigurationController::class, 'index']);