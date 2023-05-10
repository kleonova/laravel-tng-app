<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function(){
    return view('index');
});

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/create', [ArticleController::class, 'create']);
Route::get('/articles/{id}', [ArticleController::class, 'show']);
Route::post('/articles', [ ArticleController::class, 'store' ]);
Route::delete('/articles/{id}', [ ArticleController::class, 'destroy' ])->name('article.destroy');

Route::get('/cars', [CarController::class, 'index']);
Route::get('/cars/create', [CarController::class, 'create']);
Route::get('/cars/edit/{id}', [CarController::class, 'edit']);
Route::get('/cars/{id}', [CarController::class, 'show']);
Route::post('/cars', [ CarController::class, 'store' ]);
Route::put('/cars/{id}', [ CarController::class, 'update' ])->name('car.update');
Route::delete('/cars/{id}', [ CarController::class, 'destroy' ])->name('car.destroy');