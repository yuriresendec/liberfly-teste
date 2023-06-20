<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordsController;
use App\Http\Controllers\AuthController;

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

Route::middleware(['authentication'])->group(function () {
    Route::get('/records/all', [RecordsController::class, 'getAllRecords']);
    Route::post('/records', [RecordsController::class, 'getRecord']);
});

Route::get('/token', [AuthController::class, 'getToken']);