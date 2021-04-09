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




Route::group(['middleware' => ['auth']],function(){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::resource('tasks',App\Http\Controllers\TasksController::class);
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    Route::get('/dashboard/profile', 'App\Http\Controllers\DashboardController@profile')->name('profile');
    Route::resources(['contributors' => App\Http\Controllers\ContributorsController::class,
    //'posts' => PostController::class,
    ]);
});

//all path of user route
 Route::group(['middleware' => ['auth','role:user']],function(){
    
}); 



//all path of manager route
Route::group(['middleware' => ['auth','role:manager']],function(){
    Route::resource('users',App\Http\Controllers\UserController::class);
});

 //all path of superadministrator route
Route::group(['middleware' => ['auth','role:superadministrator']],function(){
    //Route::get('laratrust');
    //Route::resource('laratrust',App\Http\Controllers\PermissionsController::class);
});

require __DIR__.'/auth.php';
