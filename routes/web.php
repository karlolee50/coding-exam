<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;

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

Route::get('/', [ArticlesController::class, 'index']);
Route::get('/articles/create', [ArticlesController::class, 'create']);
Route::post('/articles/create', [ArticlesController::class, 'store']);
Route::get('/articles/{article}', [ArticlesController::class, 'show']);
Route::get('/articles/{article}/edit', [ArticlesController::class, 'edit']);
Route::put('/articles/{article}/edit', [ArticlesController::class, 'update']);
Route::delete('/articles/{article}', [ArticlesController::class, 'destroy']);
Route::put('/articles/{article}/upvote', [ArticlesController::class, 'upvote']);
Route::put('/articles/{article}/downvote', [ArticlesController::class, 'downvote']);
