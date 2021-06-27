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
Route::get('/search', [App\Http\Controllers\SearchController::class, 'search']);


// Profile Routes
Route::get('/profile',[App\Http\Controllers\ProfileController::class, 'index']);
Route::get('/create-profile',[App\Http\Controllers\ProfileController::class, 'show']);
Route::post('/create-profile',[App\Http\Controllers\ProfileController::class, 'create']);
Route::get('/profile/edit/{id}', [App\Http\Controllers\ProfileController::class, 'edit']);
Route::post('/profile/edit/update',[App\Http\Controllers\ProfileController::class, 'update']);
Route::post('/profile/uploadimage', [App\Http\Controllers\ProfileController::class, 'uploadimage']);


// Connection Routes
Route::get('/connections', [App\Http\Controllers\ConnectionController::class, 'connections']);
Route::get('/sendconnection/{id}', [App\Http\Controllers\ConnectionController::class, 'sendconnection']);
Route::get('/acceptconnection/{id}', [App\Http\Controllers\ConnectionController::class, 'acceptconnection']);
Route::get('/matches', [App\Http\Controllers\ConnectionController::class, 'matches']);


// Settings Routes
Route::get('/settings', [App\Http\Controllers\SettingController::class,'showsettings']);
Route::get('/settings/changepassword', [App\Http\Controllers\SettingController::class,'showchangepassword']);
Route::post('/settings/changepassword',[App\Http\Controllers\SettingController::class,'changepassword']);

// Subscriptions Routes
Route::get('/subscription',[App\Http\Controllers\SubscriptionController::class,'index']);

//Messages Routes
Route::get('/inbox',[App\Http\Controllers\MessageController::class,'showList']);
// Route::get('/inbox/chats/{id}', [App\Http\Controllers\MessageController::class,'chatPage']);
Route::get('/inbox/chats/{id}',[App\Http\Controllers\MessageController::class,'fetchMessages']);
Route::post('/inbox/chats', [App\Http\Controllers\MessageController::class,'sendMessage']);

//admin
Route::get('/admin/dashboard',[App\Http\Controllers\AdminController::class,'index']);
Route::get('/admin/users',[App\Http\Controllers\AdminController::class,'usersData']);
Route::get('/admin/subscriptions',[App\Http\Controllers\AdminController::class,'subscriptionsData']);
Route::get('/admin/messages',[App\Http\Controllers\AdminController::class,'messagesData']);
Route::get('/admin/connections',[App\Http\Controllers\AdminController::class,'connectionsData']);
