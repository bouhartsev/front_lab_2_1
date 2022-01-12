<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceCommentController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Mail;

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

//Public route
Route::post('/registration', [AuthController::class, 'registration']);
Route::post('/login', [AuthController::class, 'login'])->name('login');


//Private route
Route::middleware('auth:sanctum')->get('/signout', [AuthController::class, 'signOut']);
Route::middleware('auth:sanctum')->resource('service', ServiceController::class);
Route::group(['prefix' => '/comment', 'middleware'=>'auth:sanctum'], function(){
    Route::get('', [ServiceCommentController::class, 'index'])->name('index');
    Route::get('/{id}/accept', [ServiceCommentController::class, 'accept']);
    Route::get('/{id}/delete', [ServiceCommentController::class, 'destroy']);
    Route::post('/{id}/create', [ServiceCommentController::class, 'store']);

});