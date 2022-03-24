<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

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
Route::get('/',[homeController::class,'showHome']);
Route::get('/home',[homeController::class,'showHome']);
Route::get('/login',[homeController::class,'showLogin'])->name('auth.showLogin');

Route::Get('/register',[homeController::class,'showRegister'])->name('auth.show');