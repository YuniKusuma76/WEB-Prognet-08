<?php

use App\Http\Controllers\AgamaController;
use App\Http\Controllers\AnggotakkController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HubungankkController;
use App\Http\Controllers\KkController;
use App\Http\Controllers\PendudukController;
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

Route::get('/', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::get('/sign-up', [AuthController::class, 'signup'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('sesi')->middleware('guest');

Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::resource('/agama', AgamaController::class)->middleware('auth');
Route::resource('/kk', KkController::class)->middleware('auth');
Route::resource('/hubungankk', HubungankkController::class)->middleware('auth');
Route::resource('/penduduk', PendudukController::class)->middleware('auth');
Route::resource('/anggotakk', AnggotakkController::class)->middleware('auth');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
