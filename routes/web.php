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
Route::get('/profile',[App\Http\Controllers\ProfileController::class, 'index']);
Route::get('/create-profile',[App\Http\Controllers\ProfileController::class, 'show']);
Route::post('/create-profile',[App\Http\Controllers\ProfileController::class, 'create']);
Route::get('/profile/edit/{id}', [App\Http\Controllers\ProfileController::class, 'edit']);
Route::post('/profile/edit/update',[App\Http\Controllers\ProfileController::class, 'update']);
Route::get('/search', [App\Http\Controllers\SearchController::class, 'search']);
Route::post('/profile/uploadimage', [App\Http\Controllers\ProfileController::class, 'uploadimage']);
Route::get('/sendconnection/{id}', [App\Http\Controllers\ConnectionController::class, 'sendconnection']);
Route::get('/sentconnection', [App\Http\Controllers\ConnectionController::class, 'sentconnection']);
Route::get('/receivedconnection', [App\Http\Controllers\ConnectionController::class, 'receivedconnection']);
Route::get('/acceptconnection/{id}', [App\Http\Controllers\ConnectionController::class, 'acceptconnection']);