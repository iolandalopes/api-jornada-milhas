<?php

use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WhitherController;
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

Route::apiResource('/depoimentos', ReviewController::class)->parameters([
    'depoimentos' => 'review',
])->only('store', 'update', 'destroy');
Route::get('/depoimentos-home', [ReviewController::class, 'returnReviews'])->name('depoimentos');

Route::apiResource('/destinos', WhitherController::class)->parameters([
    'destinos' => 'whither',
])->only('store', 'update', 'destroy');