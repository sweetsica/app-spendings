<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SourceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HistoryController;


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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',function (){
    return view('login');
})->name('login');

Route::get('/dashboard',[UserController::class,'index'])->name('home');

Route::post('/login',[UserController::class,'logInCheck'])->name('login.check');
Route::get('/logout',[UserController::class,'logOut'])->name('logout');

Route::resource('/source',SourceController::class);
Route::resource('/category',CategoryController::class);
Route::resource('/history',HistoryController::class);

