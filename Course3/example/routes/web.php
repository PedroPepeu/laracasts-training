<?php

// php artisan route:list --except-vendor
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::view('/', 'home');

// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', 'index');
//     Route::get('/jobs', 'create');
//     Route::get('/jobs', 'show');
//     Route::post('/jobs', 'store');
//     Route::get('/jobs', 'edit');
//     Route::patch('/jobs', 'update');
//     Route::delete('/jobs', 'destroy');
// });

Route::resource('jobs', JobController::class);

// Route::get('/post/posts:slug') slug, if not id, it is id by default

Route::view('/contact', 'contact');

// Route::get('/foo', function () {
//     return ['foo' => 'bar'];
// });