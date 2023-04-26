<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MuroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

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
    return view('principal');
})->name('index');

Route::get('/cuenta', [RegisterController::class,'index'])->name('cuenta.index');

Route::post('/cuenta', [RegisterController::class,'store'])->name('cuenta.store');

Route::get('/login', [LoginController::class,'index'])->name('login');

Route::post('/login', [LoginController::class,'store'])->name('login.store');

Route::post('/logout', [LogoutController::class,'store'])->name('logout.store');

Route::get('/{user:username}', [MuroController::class,'index'])->name('muro.index');

Route::get('/muro/create', [MuroController::class,'create'])->name('muro.create');