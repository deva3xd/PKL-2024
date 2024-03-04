<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PendaftaranController;
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

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('postLogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'PendaftaranMiddleware'])->group(function() {
    Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
    Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('storePendaftaran');
    Route::get('/status', [PendaftaranController::class, 'status'])->name('status');
    Route::get('/status/{id}/update', [PendaftaranController::class, 'update'])->name('updateStatus');
    Route::get('/status/{id}/delete', [PendaftaranController::class, 'delete'])->name('deleteStatus');
});