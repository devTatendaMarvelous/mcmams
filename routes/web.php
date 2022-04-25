<?php

use App\Http\Controllers\ClientsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\userProfileController;
use App\Http\Controllers\MembersController;

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
    return view('pages.home');
})->middleware('auth');
//===========USER PROFILES=====

route::get('/profile/{id}', [UserProfileController::class, 'index']);
route::post('/profile/{id}/edit', [UserProfileController::class, 'update']);
route::post('/profile/{id}/password', [UserProfileController::class, 'password']);

// ===========================================================================================================================
// =====================USERS======================================
Route::get('/users',[UserController::class,'getUsers']);
Route::post('/users/create',[UserController::class,'create']);
Route::get('/users/{id}/edit', [UserController::class, 'edit']);
Route::get('/users/{id}/delete', [UserController::class, 'deleteUser']);
route::post('/users/{id}/store', [UserController::class, 'updateUser']);
// =============================================================================================================
// ==========MEMBERS=================================================================================
Route::get('/members',[MembersController::class, 'index']);
Route::post('/members/create', [MembersController::class, 'store']);
Route::get('/dependends/{id}', [MembersController::class,'addDependeds']);
Route::get('/dependends/{id}/store', [MembersController::class, 'storeDependends']);
// ==============================================================================================================
// ==========CLIENTS=================================================================================
Route::get('/clients/{type}', [ClientsController::class, 'index']);
Route::post('/members/create', [MembersController::class, 'store']);
// ==============================================================================================================

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
