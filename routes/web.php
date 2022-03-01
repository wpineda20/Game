<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/errorMessage', function () {
    return view('error_message.index');
});

Route::get('/numbersPuzzle', function () {
    return view('numbers_puzzle.index');
});

Route::get('/memoryAnimals', function () {
    return view('memory_animals.index');
});

Route::get('/memoryColors', function () {
    return view('memory_colors.index');
});

Route::get('/memoryBody', function () {
    return view('memory_body.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
