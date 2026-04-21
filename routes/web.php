<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
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

/* rotta parametrica per i Revisor */

Route::get('/revisor/index', [RevisorController::class, 'index'])->name('revisor.index');

// rotte per accettare o rifiutare un articolo da parte del revisore


Route::patch('/accept/{article}', [RevisorController::class, 'accept'])->name('accept');
Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');


Route::get('/revisor/index', [RevisorController::class, 'index'])
    ->middleware('isRevisor')
    ->name('revisor.index');

Route::get('/revisor/request', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');

Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');