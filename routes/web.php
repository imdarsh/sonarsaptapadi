<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return redirect('/register');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile',[App\Http\Controllers\ProfileController::class, 'index'])->middleware('auth');
Route::get('/create-profile',[App\Http\Controllers\ProfileController::class, 'show'])->middleware('auth');
Route::post('/create-profile',[App\Http\Controllers\ProfileController::class, 'create'])->middleware('auth');