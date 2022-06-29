<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::resource('category',App\Http\Controllers\CategoryController::class)->only(['index','store','show','update','destroy']);

Route::post('register', [LoginController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);