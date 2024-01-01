<?php

use App\Http\Controllers\AgamaApiController;
use App\Http\Controllers\AnggotakkApiController;
use App\Http\Controllers\AuthApiController;
use App\Http\Controllers\HubungankkApiController;
use App\Http\Controllers\KkApiController;
use App\Http\Controllers\PendudukApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route User
Route::post('/login', [AuthApiController::class, 'login']);
Route::post('/register', [AuthApiController::class, 'register']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route Master Data dan Transaksi
Route::apiResource('/agama', AgamaApiController::class);
Route::apiResource('/hubungankk', HubungankkApiController::class);
Route::apiResource('/kk', KkApiController::class);
Route::apiResource('/penduduk', PendudukApiController::class);
Route::apiResource('/anggotakk', AnggotakkApiController::class);
