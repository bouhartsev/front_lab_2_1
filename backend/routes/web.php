<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServiceController;

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

Route::get('/services', [ServiceController::class,'index']);
Route::get('/services/create', [ServiceController::class,'create']);
Route::post('/services', [ServiceController::class, 'store']);
Route::get('/services/{id}', [ServiceController::class,'view']);
Route::get('/services/{id}/edit', [ServiceController::class,'update']);
Route::post('/services/{id}/edit', [ServiceController::class,'store']);
Route::get('/services/{id}/delete', [ServiceController::class,'destroy']);
// Route::post('/articles/{id}/comment', [ArticleCommentsController::class, 'store']);
// Route::post('/article-comments', [ArticleCommentController::class, 'store']);