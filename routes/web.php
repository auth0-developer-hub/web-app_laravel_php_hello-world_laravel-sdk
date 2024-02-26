<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('pages.home');
})->name('home');

Route::get('/profile', [ProfileController::class, 'index'])
    ->middleware(['auth'])
    ->name('profile');

Route::get('/public', [MessageController::class, 'publicMessage'])
    ->name('public');
Route::get('/protected', [MessageController::class, 'protectedMessage'])
    ->middleware(['auth'])
    ->name('protected');
Route::get('/admin', [MessageController::class, 'adminMessage'])
    ->middleware(['auth'])
    ->name('admin');

Route::get('/signup', [AuthController::class, 'signup'])->name('signup');

Route::any('/{uri}', function () {
    return view('pages.error', ['error' => 'Not Found']);
})->where('uri', '.+')->name('not-found');

