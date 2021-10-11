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

Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('article.show');
