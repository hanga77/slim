<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('user',App\Http\Controllers\UserController::class);

Route::resource('roles',App\Http\Controllers\RoleController::class);

Route::resource('permissions',App\Http\Controllers\PermissionController::class);


Route::get('/users',[App\Http\Controllers\UserController::class,'index'])->name('user.index');
//load all permisssions
Route::get('/permisssion',[App\Http\Controllers\PermissionController::class,'index'])->name('permissions.index');

//load all role
Route::get('/roles',[App\Http\Controllers\RoleController::class,'index'])->name('role.index');

//load the home for user's
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//personnel informations for user like name, email, phone number
Route::get('/profile',[App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
Route::post('/profile',[App\Http\Controllers\UserController::class, 'updateProfile'])->name('user.updateProfile');
Route::get('/password/change',[App\Http\Controllers\UserController::class, 'getPassword'])->name('user.getPassword');
Route::post('/password/change',[App\Http\Controllers\UserController::class, 'changePassword'])->name('user.changePassword');

//get all permissions in the database
Route::get('/getPermission',[App\Http\Controllers\PermissionController::class,'getAllPermission']);

//save role with the vue js role
Route::post('/postRole',[App\Http\Controllers\RoleController::class,'saveRole']);
