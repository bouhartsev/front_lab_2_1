<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceCommentController;

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

// Route::group(['prefix'=>'/services'], function(){ //, 'middleware'=>'auth'
Route::get('/services', [ServiceController::class,'index']);
Route::get('/services/create', [ServiceController::class,'create']);
Route::post('/services', [ServiceController::class, 'store']);
Route::get('/services/{id}', [ServiceController::class,'view']);
Route::get('/services/{id}/edit', [ServiceController::class,'update']);
Route::post('/services/{id}/update', [ServiceController::class,'store']);
Route::get('/services/{id}/delete', [ServiceController::class,'destroy']);
// });

Route::post('/services/{id}/comment', [ServiceCommentController::class, 'store']);
// Route::post('/article-comments', [ArticleCommentController::class, 'store']);