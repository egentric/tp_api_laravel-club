<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\API\LabelController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\ProducerController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');

});

// Route::apiResource("categories", CategoryController::class);
// Route::apiResource("labels", LabelController::class);
// Route::apiResource("producers", ProducerController::class);

Route::controller(labelController::class)->group(function () {
    Route::get('labels', 'index');
    Route::post('labels', 'store');
    Route::get('labels/{label}', 'show');
    Route::post('labels/{label}', 'update');
    Route::delete('labels/{label}', 'destroy');
});
    Route::controller(CategoryController::class)->group(function () {
        Route::get('categories', 'index');
        Route::post('categories', 'store');
        Route::get('categories/{category}', 'show');
        Route::put('categories/{category}', 'update');
        Route::delete('categories/{category}', 'destroy');
    
});

Route::controller(ProducerController::class)->group(function () {
    Route::get('producers', 'index');
    Route::post('producers', 'store');
    Route::get('producers/{producer}', 'show');
    Route::post('producers/{producer}', 'update');
    Route::delete('producers/{producer}', 'destroy');

});