<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceCommentController;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('main');
});

Route::get('/listen', function () {
    return view('listen');
});

// Route::group(['prefix'=>'/services', 'middleware'=>'auth'], function(){ //
//     Route::get('', [ServiceController::class,'index']);
//     Route::get('/create', [ServiceController::class,'create']);
//     Route::post('', [ServiceController::class, 'store']);
//     Route::get('/{id}', [ServiceController::class,'view']);
//     Route::get('/{id}/edit', [ServiceController::class,'update']);
//     Route::post('/{id}/update', [ServiceController::class,'store']);
//     Route::get('/{id}/delete', [ServiceController::class,'destroy']);
//     Route::post('/{id}/comment', [ServiceCommentController::class, 'store']);
// });

// Route::get('/login', [AuthController::class, 'index'])->name('login');
// Route::get('/registration', [AuthController::class, 'registration']);
// Route::get('/logout', [AuthController::class, 'signOut']);
// Route::post('/custom-registration', [AuthController::class, 'customRegistration']);
// Route::post('/custom-login', [AuthController::class, 'customLogin']);