<?php

use App\Http\Controllers\API\JobApplicationController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/applications', [JobApplicationController::class, 'store']);
Route::get('/applications', [JobApplicationController::class, 'index']);
Route::get('/applications/{id}/download', [JobApplicationController::class, 'download']);