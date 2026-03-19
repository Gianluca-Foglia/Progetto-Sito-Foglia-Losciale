<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/create/article', [ArticleController::class, 'create'])->name('create.article');

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

// rotta parametrica per pagina di dettaglio articolo

Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('article.show');

// rotta parametrica per le categorie

Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');
