<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PageController;
use \App\Http\Controllers\ArticleController;
use \App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get("/about", [PageController::class, 'about'])->name('page.about');

Route::get("/articles", [ArticleController::class, 'index'])->name('article.index');

Route::get('/articles/create', [ArticleController::class, 'create'])->name('article.create');

Route::post('/articles', [ArticleController::class, 'store'])->name('article.store');

Route::delete('/articles/{id}', [ArticleController::class, 'delete'])->name('article.delete');

Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('article.edit');

Route::patch('/articles/{id}', [ArticleController::class, 'update'])->name('article.update');
