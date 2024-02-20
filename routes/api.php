<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\SourceController;
use App\Http\Controllers\Api\LogController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\HistoryController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AccountantController;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::name('api.')->group(function () {
    Route::post('/category/search', [CategoryController::class, 'searchCategoryByUserId']);
    Route::post('/note', [AccountantController::class, 'store'])->name('note.store');
    Route::get('/giao-dich/0/{id?}', [AccountantController::class, 'searchTransactionId']);
    Route::get('/giao-dich/1/{id?}', [AccountantController::class, 'searchTransactionUserId']);

    Route::resource('/user', UserController::class);
    Route::resource('/source', SourceController::class);
    Route::resource('/log', LogController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/history', HistoryController::class);
});



