<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

//user routes

Route::prefix('user/')->group(function() {

    Route::get('/', [UserController::class, 'index']);

    Route::get('create', [UserController::class, 'create']);

    Route::post('store', [UserController::class, 'store']);

    Route::get('edit/{id}', [UserController::class, 'edit']);
    Route::post('update', [UserController::class, 'update']);

    Route::get('delete/{id}', [UserController::class, 'destroy']);
});


Route::prefix('Admin/')->group(function () {
    Route::get('/', [AdminController::class, 'index']);

});

 