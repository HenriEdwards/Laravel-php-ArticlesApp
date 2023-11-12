<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
   
// if user visit / - invoke articlecontroller
Route::get('/', [ArticleController::class, 'index']);

Route::get('/article/{id}', [ArticleController::class, 'show']);

Route::get('/tags/{tag_id}',  [TagController::class, 'show']);

Route::get('/categories/{category_id}',  [CategoryController::class, 'show']);

//Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.show');
