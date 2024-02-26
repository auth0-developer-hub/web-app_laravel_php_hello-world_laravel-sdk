<?php

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
    ->name('profile');

Route::get('/public', [MessageController::class, 'publicMessage'])
    ->name('public');
Route::get('/protected', [MessageController::class, 'protectedMessage'])
    ->name('protected');
Route::get('/admin', [MessageController::class, 'adminMessage'])
    ->name('admin');

Route::any('/{uri}', function () {
    return view('pages.error', ['error' => 'Not Found']);
})->where('uri', '.+')->name('not-found');
