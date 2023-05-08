<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('product', ProductController::class);
//Route::apiResource('produscts', ProductController::class);
Route::put('auction/{id}/price',[\App\Http\Controllers\Api\AuctionController::class,'addauction'])->name('addauction');
//Route::post('auction/addauction',[\App\Http\Controllers\Api\AuctionController::class,'auction'])->name('addauction');

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
});
