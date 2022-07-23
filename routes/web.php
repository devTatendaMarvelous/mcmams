<?php
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AccountsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DependendsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\userProfileController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\DependendsAccountsController;
Route::get('/',[HomeController::class,'index'])->middleware('auth');
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
Route::get('/members/create', [MembersController::class, 'create']);
Route::post('/members/store', [MembersController::class, 'store']);
Route::get('/members/{id}/edit', [MembersController::class,'edit']);
Route::post('/members/{id}/update', [MembersController::class,'update']);
// ==============================================================================================================

//==================ACCOUNTS=====================================================================================
Route::get('/accounts/{id}/open', [AccountsController::class,'open']);
Route::post('/accounts/{id}/store', [AccountsController::class,'store']);
Route::get('/accounts', [AccountsController::class,'index']);
Route::get('/accounts/{id}/edit', [AccountsController::class,'edit']);
Route::post('/accounts/{id}/update', [AccountsController::class, 'update']);


//==================================================================================================================

//==================DEPENDENDSACCOUNTS=====================================================================================
Route::post('/dependendsAccounts/{id}/{member_id}/store', [DependendsAccountsController::class,'store']);
Route::get('/accounts', [AccountsController::class,'index']);
Route::get('/accounts/{id}/edit', [AccountsController::class,'edit']);
Route::post('/accounts/{id}/update', [AccountsController::class, 'update']);


//==================================================================================================================

//==================PAYMENTS=====================================================================================
Route::get('/payments', [PaymentsController::class, 'index']);
Route::get('/payments/{id}/create', [PaymentsController::class, 'create']);
Route::post('/payments/{id}/store', [PaymentsController::class, 'store']);


//==================================================================================================================


// ==========   DEPENDENDS=================================================================================
Route::get('dependends/{id}/add', [DependendsController::class, 'create']);
Route::post('/dependends/{id}/store', [DependendsController::class, 'store']);
Route::get('/dependends/{id}/show',[DependendsController::class,'show']);
// ==============================================================================================================



// ==========   PRODUCTS=================================================================================
Route::get('products', [ProductsController::class, 'index']);
Route::get('products/create', [ProductsController::class, 'create']);
Route::post('/products/store', [ProductsController::class, 'store']);
Route::get('/products/{id}/delete',[ProductsController::class,'destroy']);
Route::get('/products/{id}/edit',[ProductsController::class,'edit']);
Route::post('/products/{id}/update',[ProductsController::class,'update']);
// ==============================================================================================================

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
